
// ナビゲーション部分
let nav = document.querySelector("#navArea");
let btn = document.querySelector(".toggle-btn");
let mask = document.querySelector("#mask");

btn.onclick = () => {
  nav.classList.toggle("open");
};

mask.onclick = () => {
  nav.classList.toggle("open");
};

// ナビゲーションメニュー内のリンクがクリックされたときにナビゲーションメニューを閉じる
nav.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      nav.classList.remove("open");
    });
  });


  $('a[href^="#"]').on('click', function() {
    var speed = 1000;
    var offset = 0; // スクロール位置をずらす（px）
    var $this = $(this);
    var href = $this.attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - offset
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false
  });



// mainのバンドロゴを下からズームインさせる
document.addEventListener("DOMContentLoaded", function() {
    const logoImg = document.querySelector('.logo img');

    // ロゴ画像にshowクラスを追加して表示する
    logoImg.classList.add('show');

    // ロゴ画像の表示アニメーションが完了した後に画像を表示する
    logoImg.addEventListener('transitionend', function() {
        setTimeout(() => {
            document.querySelectorAll('.photos').forEach(img => {
                img.style.opacity = 1;
            });
        }, 5000); // 5秒後に画像を表示
    });
});



const targets = document.querySelectorAll('.fade');
for(let i = targets.length; i--;){
 let observer = new IntersectionObserver((entries, observer) => {
  for(let j = entries.length; j--;){
   if (entries[j].isIntersecting) {
    entries[j].target.classList.add('active');
   } else{
    entries[j].target.classList.remove('active');
   }
  }
 });
 observer.observe(targets[i]);
}

