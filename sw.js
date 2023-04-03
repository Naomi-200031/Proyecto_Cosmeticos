const CACHE_NAME = 'Cosmeticos',
urlsToCache = [ 
    "./",
    "./Boca.css",
    "./Boca.html",
    "./Boca.js",
    "./Cejas.css",
    "./Cejas.html",
    "./Cejas.js",
    "./Index.css",
    "./Index.html",
    "./Mascarillas.css",
    "./Mascarilla.html",
    "./Mascarillas.js",
    "./ojos.css",
    "./Ojos.html",
    "./Ojos.js",
    "./pestanas.css",
    "./Pestanas.html",
    "./Pestanas.js",
    "./imagenes/icono2.png",
    "./imagenes/logo.png",
    "./imagenes/B1.png",
    "./imagenes/B2.png",
    "./imagenes/B3.png",
    "./imagenes/B4.png",
    "./imagenes/B5.png",
    "./imagenes/B6.png",
    "./imagenes/C1.png",
    "./imagenes/C2.png",
    "./imagenes/C3.png",
    "./imagenes/C4.png",
    "./imagenes/C5.png",
    "./imagenes/C6.png",
    "./imagenes/M1.png",
    "./imagenes/M2.png",
    "./imagenes/M3.png",
    "./imagenes/M4.png",
    "./imagenes/M5.png",
    "./imagenes/M6.png",
    "./imagenes/O1.png",
    "./imagenes/O2.png",
    "./imagenes/O3.png",
    "./imagenes/O4.png",
    "./imagenes/O5.png",
    "./imagenes/O6.png",
    "./imagenes/P1.png",
    "./imagenes/P2.png",
    "./imagenes/P3.png",
    "./imagenes/P4.png",
    "./imagenes/P5.png",
    "./imagenes/P6.png"
]

self.addEventListener('install', e => {
    e.waitUntil(
      caches.open(CACHE_NAME)
        .then(cache => {
          return cache.addAll(urlsToCache)
            .then(() => self.skipWaiting())
        })
        .catch(err => console.log('Falló registro de cache', err))
    )
  })
  
  //una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
  self.addEventListener('activate', e => {
    const cacheWhitelist = [CACHE_NAME]
  
    e.waitUntil(
      caches.keys()
        .then(cacheNames => {
          return Promise.all(
            cacheNames.map(cacheName => {
              //Eliminamos lo que ya no se necesita en cache
              if (cacheWhitelist.indexOf(cacheName) === -1) {
                return caches.delete(cacheName)
              }
            })
          )
        })
        // Le indica al SW activar el cache actual
        .then(() => self.clients.claim())
    )
  })
  
  //cuando el navegador recupera una url
  self.addEventListener('fetch', e => {
    //Responder ya sea con el objeto en caché o continuar y buscar la url real
    e.respondWith(
      caches.match(e.request)
        .then(res => {
          if (res) {
            //recuperar del cache
            return res
          }
          //recuperar de la petición a la url
          return fetch(e.request)
        })
    )
  })

