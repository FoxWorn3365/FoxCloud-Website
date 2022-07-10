window.addEventListener('scroll', ()=>{  
  if (document.getElementById('news') && document.getElementById('fetchingNews').style.display != "none") {
    if ((document.documentElement.scrollTop + (window.innerHeight - 25)) >= getOffset(document.getElementById('news')).top) {
      document.getElementById('news').classList.add('w3-animate-top');
      fetchNews();
    }
  }

});

function fetchNews() {
  document.getElementById('fetchingNews').style.display = "block";
  var res = JSON.parse(http_request('https://foxcloud.fcosma.it/assets/php/getLatestNews.php'));
  console.log("Loaded news - " + res.status);
  if (res.status == 200) {
    setTimeout(loadNews(res), 5000);
  }
}

function loadNews(res) {
  document.getElementById('fetchingNews').style.display = "none";
  for (let a = 0; a < res.number; a++) {
    document.getElementById('news_storage_' + a).style.display = "block";
    document.getElementById('news_storage_' + a + '_title').innerHTML = res.news[a].title;
    document.getElementById('news_storage_' + a + '_author').innerHTML = res.news[a].author;
    document.getElementById('news_storage_' + a + '_time').innerHTML = res.news[a].time;
    document.getElementById('news_storage_' + a + '_content').innerHTML = res.news[a].content;
  }
}
