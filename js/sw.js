var cacheName = 'jindatheme-sw-cache';

var urlsToCache = [
  '../',
  '../css/vendor.css',
  './clients.js'
];

self.addEventListener('install', function(event) {
	console.log('[ServiceWorker] Installed');
  // Perform install steps
  event.waitUntil(
    caches.open(cacheName)
    .then(function(cache) {
      return cache.addAll(urlsToCache);
    })
  )
});

self.addEventListener('fetch', function(event) {
	console.log(event.request.url);

	event.respondWith(
		caches.match(event.request).then(function(response) {
			if (event.request.url.indexOf('facebook') > -1) {
				return fetch(event.request);
			}
			if (response) {
				console.log('Serve from cache', response);
				return response;
			}
			return fetch(event.request).then(response =>
				caches.open(CURRENT_CACHES.prefetch).then(cache => {
					cache.put(event.request, response.clone());
					return response;
				})
			);
		})
	);
});

self.addEventListener('activate', function(e) {
	console.log('[ServiceWorker] Activated');

	e.waitUntil(
		caches.keys().then(function(cacheNames) {
			return Promise.all(
				cacheNames.map(function(thisCacheName) {
					if (thisCacheName !== cacheName) {
						console.log('[ServiceWorker] Removing Cached Files from Cache - ', thisCacheName);
						return caches.delete(thisCacheName);
					}
				})
			);
		})
	);
});

