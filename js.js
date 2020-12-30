const changeCss = (style) => {
  console.log('css changed');
  let name = `scss/${style}/${style}.css?v=${Math.floor(Math.random()*10)}`
  console.log(name);
  document.getElementById('csslink').href= name;
}