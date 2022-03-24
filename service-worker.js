if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('/service-worker.js');
    });
  }
  
  self.addEventListener('install', function(event) {
    // Perform some task
    // console.log('OK!!!');
  });
  
  self.addEventListener('activate', function(event) {
    // Perform some task
    // console.log('Active!!!');
  });
  
  self.addEventListener('fetch', function(event) {
    
  });