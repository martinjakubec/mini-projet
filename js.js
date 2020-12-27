const changeCss = (style) => {
  console.log('css changed');
  let name = `scss/${style}/${style}.css`
  console.log(name);
  document.getElementById('csslink').href= name;
}