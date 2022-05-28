/*
 * @Author: ouyangyanhuo ouyangyanhuo@vip.qq.com
 * @Date: 2022-05-28 18:46:25
 * @LastEditors: ouyangyanhuo ouyangyanhuo@vip.qq.com
 * @LastEditTime: 2022-05-28 19:24:20
 * @FilePath: \SmileThemePJAX\pjax.js
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
var pjax = new Pjax({
    // 在页面进行 PJAX 时需要被替换的元素或容器，一条一个 CSS 选择器，数组形式
    selectors: [
      "title",
      "meta[name=description]",
      "main"
    ],
    cacheBust: false
  })
document.addEventListener('pjax:send', function (){
    NProgress.start();
});
 
document.addEventListener('pjax:complete', function (){
    NProgress.done(); ;
});
