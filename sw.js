const cacheName = 'full-v1';
const staticAssets = [
  './',
  './index.html',
  './404.html',
  './redirect.php',
  './css/styles.css',
  './js/script.js',
  // './js/spa.js',
  './js/lazyload.js',
  './html/about.php',
  './html/blog.php',
  './html/contact.php',
  './html/footer.php',
  './html/header.php',
  './html/main.php',
  './html/menu.php',
  './html/reservation.php',
  './php/addCart.php',
  './php/getArticle.php',
  './php/getArticles.php',
  './php/getCartValue.php',
  './php/getChefs.php',
  './php/getClientsReview.php',
  './php/getSpecialFoods.php',
  './php/initLike.php',
  './php/initView.php',
];

self.addEventListener('install', async e => {
  const cache = await caches.open(cacheName);
  await cache.addAll(staticAssets);
  return self.skipWaiting();
});

self.addEventListener('activate', e => {
  self.clients.claim();
});

self.addEventListener('fetch', async e => {
  const req = e.request;
  const url = new URL(req.url);

  if (url.origin === location.origin) {
    e.respondWith(cacheFirst(req));
  } else {
    e.respondWith(networkAndCache(req));
  }
});

async function cacheFirst(req) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(req);
  return cached || fetch(req);
}

async function networkAndCache(req) {
  const cache = await caches.open(cacheName);
  try {
    const fresh = await fetch(req);
    await cache.put(req, fresh.clone());
    return fresh;
  } catch (e) {
    const cached = await cache.match(req);
    return cached;
  }
}