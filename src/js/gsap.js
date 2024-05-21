'use strict'

const tl = gsap.timeline();

// gsap.fromTo('.js-fv-title',{
//   y:'100%',
//   opacity:0
// },{
//   y:0,
//   duration:3.5,
//   opacity:1,
//   delay:2.0,
//   ease: "circ.out"

// });

tl.fromTo('.js-fv-title',{
  y:'100%',
  opacity:0
},{
  y:0,
  duration:3.5,
  opacity:1,
  // delay:2.0,
  ease: "circ.out"
}).fromTo('.js-fv-img-01',{
  y:'100%',
  opacity:0
},{
  y:0,
  duration:3.5,
  opacity:1,
  // delay:3.0,
  ease: "circ.out"

},).fromTo('.js-fv-img-02',{
  y:'100%',
  opacity:0
},{
  y:0,
  duration:4.0,
  opacity:1,
  // delay:3.0,
  ease: "circ.out"

},);