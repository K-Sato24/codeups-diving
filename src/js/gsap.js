'use strict'

const tl = gsap.timeline({
    onComplete: initSwiper
  });

tl.fromTo('.js-loading-title',{
  opacity:0
},{
  duration:2.0,
  opacity:1,
}).fromTo('.js-loading-title',{
  opacity:1
},{
  duration:1.0,
  opacity:0,
}).fromTo('.js-fv-img-01',{
  y:'100%',
  opacity:0
},{
  y:0,
  duration:2.0,
  opacity:1,
  delay:0.3,
  ease: "circ.out"

},'img').fromTo('.js-fv-img-02',{
  y:'100%',
  opacity:0
},{
  y:0,
  duration:2.0,
  opacity:1,
  delay:0.8,
  ease: "circ.out"

},'img').fromTo('.js-fv-title',{
  opacity:0
},{
  duration:2.5,
  opacity:1,
});