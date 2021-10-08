import 'bootstrap';

import anime from 'animejs/lib/anime.es.js';


anime({
    targets: '#hero',
    translateX:0,
    opacity: ['0','1'],
    easing: 'easeInOutExpo',
    backgroundColor: '#FFF',
    duration: 1500
  });

 
