(function () {
  const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector(".btn_cookies");

  acceptBtn.onclick = () => {
    //setting cookie for 1 month, after one month it'll be expired automatically
    document.cookie = "CookieBy=VegAndando; max-age=" + 60 * 60 * 24 * 30;
    console.log(acceptBtn);

    if (document.cookie) {
      //if cookie is set
      cookieBox.classList.add("hide"); //hide cookie box
    } else {
      //if cookie not set then alert an error
      alert(
        "Cookie can't be set! Please unblock this site from the cookie setting of your browser."
      );
    }
  };
  let checkCookie = document.cookie.indexOf("CookieBy=VegAndando"); //checking our cookie
  //if cookie is set then hide the cookie box else show it
  checkCookie != -1
    ? cookieBox.classList.add("hide")
    : cookieBox.classList.remove("hide");
})();
