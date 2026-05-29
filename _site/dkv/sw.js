/**
 * Service Worker — Portfolio Reza Ahmad Al Ghifari
 * Strategi: Cache First untuk gambar, Network First untuk HTML/CSS/JS
 * Fitur: Kirim pesan 'CACHE_READY' ke halaman saat semua gambar sudah ter-cache
 *
 * Cara update cache: ganti CACHE_VERSION
 */

const CACHE_VERSION = 'v2';
const CACHE_NAME    = `portfolio-${CACHE_VERSION}`;

const PRECACHE_ASSETS = [
    /* Thumbnail project web */
    '/thumbnail/azayakaachive.webp',
    '/thumbnail/project.webp',
    '/thumbnail/lapaqpay.webp',
    '/thumbnail/pizza.webp',
    '/thumbnail/dkvnesta.webp',

    /* Thumbnail DKV (card utama) */
    '/dkv/cupcake.webp',
    '/dkv/dam.webp',
    '/dkv/blender.webp',

    /* Gambar modal Desain Grafis */
    '/dkv/grafis/bird.webp',
    '/dkv/grafis/cupcake.webp',
    '/dkv/grafis/menu.webp',
    '/dkv/grafis/poster.webp',
    '/dkv/grafis/uss.webp',

    /* Gambar modal Video Editing */
    '/dkv/editor/after.avif',
    '/dkv/editor/before.avif',
    '/dkv/blender.png',

    /* Foto profil (LCP image) */
    '/foto_profil.webp',
];

/* ─────────────────────────────────────────────
   INSTALL — precache semua gambar
   Setelah selesai, kirim pesan CACHE_READY ke semua tab
───────────────────────────────────────────── */
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => cache.addAll(PRECACHE_ASSETS))
            .then(() => {
                /* Beritahu semua tab yang terbuka bahwa cache sudah siap */
                self.clients.matchAll({ includeUncontrolled: true }).then(clients => {
                    clients.forEach(client => client.postMessage({ type: 'CACHE_READY' }));
                });
            })
    );
    self.skipWaiting();
});

/* ─────────────────────────────────────────────
   ACTIVATE — hapus cache versi lama
───────────────────────────────────────────── */
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(keys =>
            Promise.all(
                keys
                    .filter(key => key !== CACHE_NAME)
                    .map(key => caches.delete(key))
            )
        )
    );
    self.clients.claim();
});

/* ─────────────────────────────────────────────
   FETCH — Cache First untuk gambar, Network First lainnya
───────────────────────────────────────────── */
self.addEventListener('fetch', event => {
    const { request } = event;

    if (request.method !== 'GET') return;
    if (!request.url.startsWith(self.location.origin)) return;

    const isImage = request.destination === 'image'
        || /\.(webp|avif|png|jpg|jpeg|gif|svg)(\?.*)?$/.test(request.url);

    if (isImage) {
        event.respondWith(
            caches.open(CACHE_NAME).then(cache =>
                cache.match(request).then(cached => {
                    if (cached) {
                        /* Cache hit — pakai langsung, refresh di background (fire-and-forget) */
                        fetch(request).then(response => {
                            if (response && response.ok) cache.put(request, response.clone());
                        }).catch(() => {});
                        return cached;
                    }
                    /* Cache miss — fetch, clone untuk disimpan, return original */
                    return fetch(request).then(response => {
                        if (response && response.ok) {
                            cache.put(request, response.clone()); // clone dulu...
                        }
                        return response; // ...baru return original
                    }).catch(() => null);
                })
            )
        );
    } else {
        event.respondWith(
            fetch(request)
                .then(response => {
                    if (response && response.ok) {
                        caches.open(CACHE_NAME).then(cache => cache.put(request, response.clone()));
                    }
                    return response;
                })
                .catch(() => caches.match(request))
        );
    }
});