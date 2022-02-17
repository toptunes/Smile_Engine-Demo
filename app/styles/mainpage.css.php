
@font-face {
  font-family: Vazir;
  src: url("/Fonts/Vazir-Thin-FD.eot");
  src: url("/Fonts/Vazir-Thin-FD.eot?#iefix") format("FontName-opentype"),
    url("/Fonts/Vazir-Thin-FD.woff") format("woff"),
    url("/Fonts/Vazir-Thin-FD.ttf") format("truetype");
  font-weight: 100;
}

@font-face {
  font-family: Vazir;
  src: url("/Fonts/Vazir-Light-FD.eot");
  src: url("/Fonts/Vazir-Light-FD.eot?#iefix") format("FontName-opentype"),
    url("/Fonts/Vazir-Light-FD.woff") format("woff"),
    url("/Fonts/Vazir-Light-FD.ttf") format("truetype");
  font-weight: 300;
}

@font-face {
  font-family: Vazir;
  src: url("/Fonts/Vazir-FD.eot");
  src: url("/Fonts/Vazir-FD.eot?#iefix") format("FontName-opentype"),
    url("/Fonts/Vazir-FD.woff") format("woff"),
    url("/Fonts/Vazir-FD.ttf") format("truetype");
  font-weight: 400;
}

@font-face {
  font-family: Vazir;
  src: url("/Fonts/Vazir-Medium-FD.eot");
  src: url("/Fonts/Vazir-Medium-FD.eot?#iefix") format("FontName-opentype"),
    url("/Fonts/Vazir-Medium-FD.woff") format("woff"),
    url("/Fonts/Vazir-Medium-FD.ttf") format("truetype");
  font-weight: 500;
}

@font-face {
  font-family: Vazir;
  src: url("/Fonts/Vazir-Bold-FD.eot");
  src: url("/Fonts/Vazir-Bold-FD.eot?#iefix") format("FontName-opentype"),
    url("/Fonts/Vazir-Bold-FD.woff") format("woff"),
    url("/Fonts/Vazir-Bold-FD.ttf") format("truetype");
  font-weight: 600;
}




.clearfix {
  width: 100%;
  height: 0px;
  clear: both;
  display: block;
}
.f-small{
  font-size: 12px;
    display: flex;
    position: absolute;
    margin-right: -41px;
    font-family: 'Vazir';
    margin-top: 10px;
    background: white;
    width: 100px;
    color: #727272;
    justify-content: space-around;
}
.w-contain-fit {
 
    object-fit: contain;
}
 
.w-100 {
  width: 100%;
}
.img_fit_140{
    width: 100%;
    object-fit: contain;
    height: 95px;
}
.padding-16 {
  padding: 16px;
}

.p-r {
  position: relative;
}

.d-flex {
  display: flex;
}

.text-align-l {
  text-align: left;
}

.btn {
  border: 1px solid #fff;
  padding: 8px 16px;
  border-radius: 10px;
  font-family: Vazir;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: space-around;
  min-width: 133px;
}

/* page reform */

body {
  margin: 0;
  padding: 0;
  font-size: 16px;
  font-weight: 400;
  font-family: Vazir;
  background: #f5f5f5;
  color: #515151;
  direction: rtl;
}

* {
  box-sizing: border-box;
}

input {
  font-family: Vazir;
}

a,
a:visited {
  text-decoration: none;
  color: #000;
}

/* page reform */
/* header section */
.header-section {
  background: #fff;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
    -webkit-box-shadow: 0 2px 4px 0 hsl(0deg 0% 44% / 5%);
    box-shadow: 0 2px 4px 0 hsl(0deg 0% 44% / 5%);
    background-color: #fff;
 
    -webkit-box-shadow: rgb(0 0 0 / 4%) 0 7px 8px 0;
    box-shadow: 0 7px 8px 0 rgb(0 0 0 / 4%);
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.header-section-right {
  display: flex;
  align-items: center;
  width: 70%;
  justify-content: flex-end;
}

.header-section-right > form {
  position: relative;
}

.header-section-right-search {
  min-width: 35rem;
  margin-right: 23px;
  padding: 15px 36px;
  background: #f0f0f1;
  border: 0px;
  border-radius: 14px;
  outline: none;
}

.header-section-right-search-icon {
  position: absolute;
  font-size: 18px;
  top: 15px;
  right: 35px;
  color: #adafb3;
}

.header-section-left {
  width: 30%;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

.profile_btn {
width:150px;
max-width:200px;
  border: 1px solid #e0e0e2;
  padding: 10px 15px;
  display: flex;
  align-items: center;
  border-radius: 12px;
  color: #515151;
}

.my-fa-user {
  margin-left: 5px;
  font-size: 18px;
}

.header-left-seperator {
  width: 2px;
  height: 28px;
  background: #e0e0e2;
  margin: 0px 20px;
}

.my-fa-shopping-cart {
  font-size: 18px;
  color: #515151;
}

.header-section-right-nav-menu {
  width: 100%;

}

.nav-menu {
  list-style-type: none;
  display: flex;
  align-items: center;
  font-size: 13px;
  margin: 0px;
 
  padding: 0px;
}

.nav-menu > li {
  margin-right: 21px;
  position: relative;
  padding: 6px 0px;
}

.nav-menu > li:first-child {
  margin-right: 0px;
}

.nav-menu > li:nth-child(2) {
  display: flex;
}

.nav-menu > li > span {
  color: #616161;
}

.nav-menu-seperator {
  width: 1px;
  height: 19px;
  background: #aeaeae;
  margin-left: 10px;
}

.first-submenu {
  padding: 0px;
  list-style-type: none;
  position: absolute;
  z-index: 10;
  width: 220px;
  font-size: 14px;
  top: 28px;
  right: 7px;
  display: none;
  background-color: #fff;
}

.first-submenu > li {
  padding: 11.65px 13px;
}

.first-submenu > li:hover {
  color: #ff1211;
  cursor: pointer;
  background: #dddcdc;
}

.first-submenu > li > a:hover {
  color: #ff1211;
  cursor: pointer;
}

.nav-menu > li:first-child:hover .first-submenu {
  display: block;
}

.subsubmenu,
.subsubmenu-1,
.subsubmenu-2,
.subsubmenu-3,
.subsubmenu-4,
.subsubmenu-5,
.subsubmenu-6,
.subsubmenu-7,
.subsubmenu-8,
.subsubmenu-9 {
  background: #fff;
  position: absolute;
  z-index: 20;
  right: 204px;
  top: 0px;
  width: 80vw;
  border: 1px solid #ddd5d5;
  border-radius: 8px;
  padding: 12px;
  display: none;
  transition: 0.1s;
}

.product-division {
  display: flex;
  margin-top: 8px;
}

.product-division > div > ul {
  list-style-type: none;
  padding-right: 0px;
}

.product-division li {
  margin: 8px;
  display: flex;
  align-items: center;
}

.product-division li a:hover {
  color: #ff0000;
}

.v-line {
  height: 12px;
  width: 2px;
  background: #ff0f0f;
  margin-left: 8px;
}

.first-submenu > li:first-child:hover > .subsubmenu {
  display: block;
}

.first-submenu > li:nth-child(2):hover > .subsubmenu-1 {
  display: block;
}

.first-submenu > li:nth-child(3):hover > .subsubmenu-2 {
  display: block;
}

.first-submenu > li:nth-child(4):hover > .subsubmenu-3 {
  display: block;
}

.first-submenu > li:nth-child(5):hover > .subsubmenu-4 {
  display: block;
}

.first-submenu > li:nth-child(6):hover > .subsubmenu-5 {
  display: block;
}

.first-submenu > li:nth-child(7):hover > .subsubmenu-6 {
  display: block;
}

.first-submenu > li:nth-child(8):hover > .subsubmenu-7 {
  display: block;
}

.first-submenu > li:nth-child(9):hover > .subsubmenu-8 {
  display: block;
}

.first-submenu > li:nth-child(10):hover > .subsubmenu-9 {
  display: block;
}

.second-submenu {
  position: absolute;
  width: 450px;
  background: #fff;
  top: 32px;
  padding: 7px 12px;
  z-index: 10;
  display: none;
}

.supermarketing {
  font-weight: 700;
  margin-right: 10px;
}

.seperator-line {
  width: 220px;
  height: 2px;
  background: #212121;
  margin: 5px 0px;
}

.supermarket-title {
  font-weight: 700;
  margin-right: 11px;
}

.list-products {
  padding: 0px;
  list-style-type: none;
  font-size: 12px;
  margin-right: 11px;
  font-weight: 400;
}

.nav-menu > li:nth-child(2):hover .second-submenu {
  display: flex;
}

.header-section-left-location {
  margin-top: 21px;
  color: #616161;
}

.my-fa-map-marker-alt {
  position: relative;
  top: 1px;
}
/* header section */
/* first slider section */

.first-slider {
  padding: 8px;
}

.first-slider-right {
  padding: 3px 3px;
  position: relative;
}

.first-slider-right > img {
  border-radius: 20px;
}

.slider-next {
  background: initial;
  border: 0px;
  font-size: 30px;
  color: #dfdfdf;
  position: absolute;
  top: calc(50% - 18px);
  right: 15px;
  transition: 0.3s;
}

.slider-next:hover {
  right: 9px;
  cursor: pointer;
}

.slider-prev {
  background: initial;
  border: 0px;
  font-size: 30px;
  color: #dfdfdf;
  position: absolute;
  top: calc(50% - 18px);
  left: 15px;
  transition: 0.3s;
}

.slider-prev:hover {
  left: 9px;
  cursor: pointer;
}

.first-slider-left {
  padding: 3px 7px;
}

.first-slider-left > img {
  border-radius: 10px;
  margin-top: 1px;
}
/* first slider section */
/* first super offers */
.first-super-offers-container {
  background: #6bb927;
}

.first-super-offers-right-section {
  display: flex;
  flex-direction: column;
  padding: 36px;
}

.offers-btn {
  position: relative;
  background: initial;
  border: 1px solid #fff;
  color: #fff;
  font-family: "Vazir";
  border-radius: 15px;
  padding: 5px 0px;
}

.first-super-offers-left-section {
  padding: 15px;
  justify-content: space-between;
  position: relative;
}

.offers-product-container {
  background: #fff;
  display: flex;
  flex-direction: column;
  align-items: stretch;
  padding: 10px;
  width: 23%;
  border-radius: 13px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  font-size: 14px;
}

.offers-product-container > img {
  width: 85%;
}

.offers-product-info {
  margin-top: 20px;
}

.offers-product-off {
  text-align: left;
  margin-top: 23px;
}

.offers-product-off > span:first-child {
  text-decoration: line-through;
}

.offers-product-off > span:nth-child(2) {
  background: #ff0000;
  color: #fff;
  padding: 2px 6px;
  font-weight: 500;
  border-radius: 8px;
}

.offers-product-price {
  text-align: left;
}

.offers-product-off-2 {
  text-align: left;
}

.offers-product-off-2 > span:first-child {
  text-decoration: line-through;
}

.offers-product-off-2 > span:nth-child(2) {
  background: #ff0000;
  color: #fff;
  padding: 2px 6px;
  font-weight: 500;
  border-radius: 8px;
}

.offers-product-price-2 {
  text-align: left;
}

.offers-product-price > b,
.offers-product-price-2 > b {
  font-size: 20px;
  font-weight: 900;
}

.slider-next-super-offers {
  position: absolute;
  background: initial;
  border: 0px;
  font-size: 25px;
  color: #515151;
  top: calc(50% - 15.5px);
  right: 20px;
  transition: 0.2s;
}

.slider-next-super-offers:hover {
  right: 15px;
  cursor: pointer;
}

.slider-prev-super-offers {
  position: absolute;
  background: initial;
  border: 0px;
  font-size: 25px;
  color: #515151;
  top: calc(50% - 15.5px);
  left: 20px;
  transition: 0.2s;
}

.slider-prev-super-offers:hover {
  left: 15px;
  cursor: pointer;
}
/* first super offers */
/* first introduction */

.first-introduction {
  padding: 13px;
  padding-top: 24px;
}

.first-introduction > a {
  padding: 5px;
}

.first-introduction > a > img {
  border-radius: 12px;
}

/* first introduction */
/* second super offers */
.second-super-offers-container {
  background: #ef394e;
}

.second-super-offers-right-section {
  display: flex;
  flex-direction: column;
  padding: 36px;
}

.product-info-container {
  height: 25%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
/* second super offers */
/* second introduction */
.second-introduction {
  padding: 10px;
  padding-top: 20px;
}

.second-introduction-right-section {
  padding-left: 5px;
}

.second-introduction-right-section > a > img {
  border-radius: 15px;
}

.second-introduction-left-section {
  padding-right: 5px;
}

.second-introduction-left-section > a > img {
  border-radius: 15px;
}
/* second introduction */
/* first offers */
.first-offers {
  padding: 13px;
  justify-content: space-around;
}

.first-offers-right-section {
  background: #fff;
  border-radius: 10px;
  padding: 10px;
  position: relative;
}

.first-offers-right-section-title {
  padding: 10px;
  padding-right: 20px;
}

.first-offers-right-section-title > div:first-child {
  font-size: 20px;
  font-weight: 500;
}

.first-offers-right-section-title > div:nth-child(2) {
  font-size: 14px;
  font-weight: 300;
}

.first-offers-right-section-seperator > div:first-child {
  height: 1px;
  background: #ff0000;
}

.first-offers-right-section-seperator > div:nth-child(2) {
  background: #c1c1c1;
  height: 1px;
  margin-right: 15px;
}

.first-offers-right {
  padding: 10px;
}

.first-offers-right > a {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 15px;
}

.first-offers-right > a > div:nth-child(3) {
  margin-top: auto;
}

.first-offers-right > a > img {
  width: 55%;
}

.first-offers-left-section {
  background: #fff;
  border: 1px solid rgba(0, 191, 214, 0.3);
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px;
  justify-content: space-evenly;
}

.first-offers-left-section-seprator {
  height: 1px;
  background: #ff0000;
}
/* first offers */
/* general explain */
.general-explain {
  background: #fff;
  padding: 16px;
  border-radius: 10px;
}

.general-explain-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
}

.products-introduction {
  justify-content: space-between;
  margin-top: 16px;
}

.subsection-container {
  width: 9%;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-size: 15px;
  text-align: center;
}

.number-of-products {
  margin-top: auto;
  font-size: 13px;
  color: #219f9f;
}

.subsection-container > .fas {
  color: #000fff;
  font-size: 24px;
}

.subsection-container > a:visited {
  color: #219f9f;
}

.general-explain-title {
  font-size: 26px;
}

.subsection-explain {
  font-size: 12px;
}
/* general explain */
/* another first offers */
.personalization-container {
  background: #fff;
  padding: 16px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  border-radius: 12px;
  font-size: 15px;
  text-align: center;
}

.personalization-container > .fa-check-circle {
  font-size: 40px;
  color: #22dd70;
}

.personalization-title {
  font-weight: 600;
}

.personalization-content {
  font-size: 13px;
  font-weight: 300;
}

.log-in-personal {
  padding: 16px 19px;
  border: 0px;
  background: #ff0f0f;
  color: #fff;
  font-size: 13px;
  font-family: "Vazir";
  font-weight: 900;
  border-radius: 16px;
}

.personal-subbutton {
  font-size: 10px;
  font-weight: 900;
}
/* another first offers */
/* advertisment 2 */
.advertisment-2 {
  padding: 16px;
}

.advertisment-2-container {
  padding: 8px;
}

.advertisment-2-container > a > img {
  border-radius: 12px;
}
/* advertisment 2 */
/* footer section */
.footer-section-container {
  background: #fff;
}

.footer-main-part {
  flex-direction: column;
  padding: 24px;
}

.footer-logos {
  display: flex;
  justify-content: space-between;
}

.footer-logos > img {
  height: 32px;
}

.back-to-up {
  background: initial;
  border: 1px solid #707070;
  padding: 10px 16px;
  border-radius: 11px;
  font-size: 16px;
  font-family: "Vazir";
}

.back-to-up > i {
  position: relative;
  top: 3px;
}

.backend-phones {
  display: flex;
  justify-content: flex-start;
}

.backend-seprator {
  width: 1px;
  height: 15px;
  background: #101010;
  margin: 0px 24px;
}

.company-properties {
  margin-top: 32px;
  justify-content: center;
}

.company-properties > div {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.company-properties > div > i {
  font-size: 32px;
  margin-bottom: 12px;
}

.horizontal-line-footer {
  width: 100%;
  height: 1px;
  background: #746060;
  margin: 20px 0px;
}

.footer-guides {
  align-items: baseline;
}

.footer-sub-guides > ul {
  padding: 0px;
  list-style-type: none;
}

.footer-sub-guides > ul > li:first-child {
  color: #000;
  font-weight: 900;
}

.footer-sub-guides > ul > li {
  margin: 10px 0px;
}

.footer-guides > div:nth-child(4) > div:first-child {
  font-size: 18px;
  margin-bottom: 20px;
}

.footer-guides > div:nth-child(4) > div:nth-child(2) > a {
  font-size: 24px;
}

.app-download {
  justify-content: space-between;
  background: #3c4b6d;
  color: #fff;
  padding: 10px;
  border-radius: 8px;
}

.app-title-logo {
  display: flex;
  align-items: center;
}

.app-title-logo > img {
  height: 20px;
  margin-left: 16px;
}

.app-stores {
  justify-content: flex-end;
  text-align: center;
}

.app-stores > div > i {
  font-size: 24px;
  margin-top: 8px;
}

/* footer section */

/* Responsive */
@media only screen and (min-width: 1200px) {


}
@media only screen and (max-width: 1000px) {
  .header-section-right-search {
    min-width: 24rem;
    margin-right: 8px;
  }

  .header-section-right-search-icon {
    right: 16px;
    top: 16px;
  }
}

@media only screen and (max-width: 769px) {
  /* Responsive for tablets */

  .scrollable {
    flex-wrap: nowrap;
    flex-direction: row;
    overflow: auto;
    scroll-behavior: smooth;
  }

  .header-section-right {
    flex-direction: column;
    width: 100%;
    margin-bottom: 10px;
  }

  .header-section-right > img:first-child {
    margin-bottom: 10px;
  }

  .header-section-right > form {
    width: 100%;
  }

  .header-section-right-search {
    min-width: 100%;
    margin: 0px;
  }

  .header-section-right-search-icon {
    right: 12px;
    top: 16px;
  }

  .header-section-left {
    width: 100%;
    justify-content: center;
  }



  .header-section {
    flex-direction: column;
  }

  .first-super-offers-right-section {
    padding: 16px;
    justify-content: center;
    width: 16%;
  }

  .offers-btn {
    padding: 8px;
    font-size: 10px;
  }

  .slider-next-super-offers {
    display: none;
  }

  .slider-prev-super-offers {
    display: none;
  }

  .offers-product-container {
    font-size: 12px;
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 25vw;
    margin: 0px 8px;
  }

  .second-super-offers-right-section {
    padding: 16px;
    justify-content: center;
    width: 16%;
  }

  .first-offers {
    padding: 8px;
    justify-content: normal;
  }

  .first-offers-right-section {
    width: 80%;
  }

  .first-offers-left-section {
    width: 18%;
  }

  .slider-next {
    display: none;
  }

  .slider-prev {
    display: none;
  }

  .first-offers-right > a {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 25vw;
  }

  .scrollable.first-offers-right-section {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 85%;
  }

  .first-offers-left-section {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 25%;
    margin-right: 16px;
  }

  .subsection-container {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 15%;
  }

  .products-introduction {
    padding-bottom: 8px;
  }

  .personalization-container {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 25%;
    margin-left: 16px;
  }

  .log-in-personal {
    padding: 8px;
  }

  .first-offers-right-section {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 100%;
  }

  .footer-section-container {
    font-size: 12px;
  }

  .backend-phones {
    margin-top: 16px;
  }
}

@media (max-width: 576px){
  .header-section-right-nav-menu {
    display: none;
  }
  .desktopview {
    display: none;
  }
.typeofstore a li{
min-height: 80px;

    text-align: center;
    display: flex;
    flex-direction: column;
    font-weight: 400;
    color: #555;
    font-size: initial;
    justify-content: space-around;
}

.f_s_font{
  font-size: 10px !important;

}
 
}
@media (min-width: 576px){


  .mobileview {
    display: none;
  }

}

@media only screen and (max-width: 430px) {
.f_s_font{
  font-size: 13px !important;

}


  .col-mobile-1 {
    width: 25%;
  }

  .col-mobile-2 {
    width: 50%;
  }

  .col-mobile-3 {
    width: 75%;
  }

  .col-mobile-4 {
    width: 100%;
  }
  /* Grid System For Mobile */
  .first-slider-right {
    width: 100%;
    padding: 0px;
  }

  .slider-next {
    right: 0px;
    font-size: 24px;
  }

  .slider-prev {
    left: 0px;
    font-size: 24px;
  }

  .first-slider-left {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    padding: 1px;
  }

  .first-slider-left > img {
    width: 50%;
    margin: 0px 2px;
  }

  .mobile-box {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 47vw;
    margin: 0px 4px;
  }

  .first-super-offers-right-section {
    width: 48%;
    padding: 24px 16px;
    justify-content: space-around;
    align-items: center;
  }

  .first-super-offers-right-section > img {
    width: 90%;
  }

  .offers-btn {
    font-size: 10px;
    padding: 8px;
  }

  .slider-next-super-offers {
    display: none;
  }

  .slider-prev-super-offers {
    display: none;
  }

  .slider-next-super-offers {
    display: none;
  }

  .slider-prev-super-offers {
    display: none;
  }

  .second-super-offers-right-section {
    justify-content: space-around;
    align-items: center;
    padding: 24px 16px;
    width: 48%;
  }

  .second-super-offers-right-section > img {
    width: 90%;
  }

  .first-offers {
    flex-wrap: wrap;
  }

  .first-offers-right-section-seperator > div:first-child {
    display: none;
  }

  .first-offers-right-section-seperator > div:nth-child(2) {
    width: 100%;
    background: #ff0000;
  }

  .slider-next {
    display: none;
  }

  .slider-prev {
    display: none;
  }

  .first-offers-right > a {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 100%;
  }

  .first-offers-left-section {
    margin-top: 8px;
    padding: 24px;
  }

  .subsection-container {
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 40%;
  }

  .general-explain-title {
    font-size: 13px;
  }

  .personalization-title {
    margin: 16px 0px;
  }

  .log-in-personal {
    margin: 16px 0px;
  }

  .first-offers-right-section {
    margin-top: 8px;
  }

  .footer-logos {
    flex-direction: column;
  }

  .back-to-up {
    margin: 16px 0px;
    padding: 8px;
  }

  .backend-phones {
    flex-direction: column;
    align-items: center;
  }

  .backend-seprator {
    display: none;
  }

  .backend-phones > div:last-child {
    text-align: center;
  }

  .backend-phones > div:nth-child(3) {
    margin: 8px 0px;
  }

  .company-properties {
    justify-content: flex-start;
  }

  .company-properties > div {
    flex-grow: 0;
    flex-shrink: 0;
    padding-bottom: 16px;
    font-size: 12px;
  }

  .footer-sub-guides {
    flex-grow: 0;
    flex-shrink: 0;
  }

  .footer-sub-guides {
    text-align: center;
  }

  .footer-guides {
    margin-bottom: 16px;
  }

  .app-title-logo {
    flex-direction: column;
    justify-content: center;
  }

  .app-stores {
    justify-content: normal;
    align-items: center;
  }

  .app-stores > .col-mobile-2 {
    flex-grow: 0;
    flex-shrink: 0;
    font-size: 12px;
  }

  .first-offers-right-section {
    min-width: 90%;
    margin: 0;
    margin-top: 8px;
  }

  .first-offers-left-section {
    min-width: 90%;
    margin: 0;
    margin-top: 8px;
  }

  .first-offers {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0px;
  }

  .personalization-container {
    min-width: 90%;
    margin: 0;
    margin-top: 8px;
  }

  .footer-section-container {
    margin-top: 8px;
  }
}

/* Responsive */


.clr_night {
color:#444;
}

.list-group {
  padding-right: 0px;
}

.btn:focus {
  outline: none !important;
  box-shadow: none !important;
}


.offcanvas-end{
width:80%;
max-width:400px;
}

.offcanvas-body {

    height: 90%;
}
////////////////////////


.h-line {
  height: 1px;
  width: 100%;
}

.my-product-container {
  border-radius: 10px;
}

.overflow-x-auto {
  overflow-x: auto;
  overflow-y: hidden;
}

.font-size-16 {
  font-size: 0.81rem !important;
}
.font-size-18 {
  font-size: 1.31rem !important;
}
.justify-content-evenly {
  justify-content: space-evenly;
}

.main-price {
  text-decoration: line-through;
  font-size: 12px;

}

.price-before-off,
.price-after-off {
 
  font-size: 15px !important;
}
.percent{
display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    flex-direction: column;
    color: #a6a6a6;
}
.plus {
 font-size: 2rem;
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    float: right;
    margin-right: -10px;
}
button {
  background: none;
  border: none;
}
.f_s_font{
font-size: 12px;

}
.product-summary-info{
    height: 25px;
    padding: 2px;
}
.ab-clr{
color: #35dc59 !important;
}
.ab-bg{
background: #35dc59 !important;
}

.info_s{
    color: #8e8e8e;
   
    font-size: smaller;
//border-right: 1px solid #ebe9e9;
    padding: 10px;
}
.c_box{
    background-color: #fff;
    -webkit-box-shadow: 0 12px 12px 0 hsl(0deg 0% 71% / 11%);
    box-shadow: 0 12px 12px 0 hsl(0deg 0% 71% / 11%);
    border: 1px solid #dedede;
    margin: 0 0 10px;
    border-radius: 8px;

    flex-direction: column;
    display: flex;
    justify-content: flex-end;
 padding-bottom: 10px;
}
.c_box_2{
    background-color: #fff;
    -webkit-box-shadow: 0 12px 12px 0 hsl(0deg 0% 71% / 11%);
    box-shadow: 0 12px 12px 0 hsl(0deg 0% 71% / 11%);
    border: 1px solid #dedede;
    margin: 0 0 20px;
    border-radius: 8px;
padding: 10px;


}
.c_box_3{
    background-color: #fff;
    -webkit-box-shadow: 0 12px 12px 0 hsl(0deg 0% 71% / 11%);
    box-shadow: 0 12px 12px 0 hsl(0deg 0% 71% / 11%);
    border: 1px solid #dedede;
    margin-right: 2px;
margin-left: 2px;
    border-radius: 8px;
padding: 10px;


}


.red-circle {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #ea0000;
    border-color: #3db92200;
    font-size: 10px;
    padding: 3px;
    color: #fff;
    top: 41px;
    z-index: 1;
    position: absolute;
}




:root {
  /*Background color when it's turned off*/
  --vc-off-color: #d1d3d4;

  /*Background color when it's turned on*/
  --vc-on-color: #38cf5b;
  
  /*Animation speed and type*/
  --vc-animation-speed: 0.15s ease-out;

  /*Font used by the text*/
  --vc-font-family: Arial;

  /*The size used*/
  --vc-font-size: 11px;

  /*The font weight*/
  --vc-font-weight: 300;
  
  /*Font color when the switch is on*/
  --vc-on-font-color: white;

  /*Font color when the switch is off*/
  --vc-off-font-color: white;

  /*How far the OFF text is from the right side*/
  --vc-label-position-off: 12px;

  /*How far the ON text is from the left side*/
  --vc-label-position-on: 11px;

  /*Small switch width*/
  --vc-width: 50px;

  /*Small switch height*/
  --vc-height: 25px;

  /*Border radius for the handle*/
  --vc-handle-border-radius: 20px;

  /*Border radius for the box*/
  --vc-box-border-radius: 18px;

  /*Shadow for the handle*/
  --vc-handle-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
  
  /*Handle color*/
  --vc-handle-color: white;

  /*Handle width*/
  --vc-handle-width: 15px;

  /*Handle height*/
  --vc-handle-height: 15px;

  /*The handle's width while the toggle is clicked*/
  --vc-onclick-width: 30px;

  /*Handle's distance from the top*/
  --vc-handle-top: 5px;
}

.vc-toggle-container * {
  font-family: var(--vc-font-family);
  -webkit-transition: var(--vc-animation-speed);
  -moz-transition: var(--vc-animation-speed);
  -o-transition: var(--vc-animation-speed);
  transition: var(--vc-animation-speed);
}

.vc-switch {
  width: var(--vc-width);
  height: var(--vc-height);
}

.vc-toggle-container label {
  position: relative;
  display: inline-block;
  vertical-align: top;
  border-radius: var(--vc-box-border-radius);
  cursor: pointer;
}

.vc-switch-input {
  position: absolute;
  transform: translate3d(5px, 5px, 0);
}

.vc-switch-label {
  position: relative;
  display: block;
  height: inherit;
  font-size: var(--vc-font-size);
  font-weight: var(--vc-font-weight);
  background: var(--vc-off-color);
  border-radius: inherit;
}

.vc-switch-label:before,
.vc-switch-label:after {
  position: absolute;
  top: 50%;
  margin-top: -0.5em;
  line-height: 1.1;
}

.vc-switch-label:before {
  content: attr(data-off);
  color: var(--vc-on-font-color);
}

.vc-switch-label:after {
  content: attr(data-on);
  color: var(--vc-off-font-color);
  opacity: 0;
}

.vc-switch-label:before {
  right: var(--vc-label-position-off);;
}

.vc-switch-label:after {
  left: var(--vc-label-position-on);;
}

.vc-switch-input:checked ~ .vc-switch-label {
  background: var(--vc-on-color);
}

.vc-switch-input:checked ~ .vc-switch-label:before {
  opacity: 0;
}

.vc-switch-input:checked ~ .vc-switch-label:after {
  opacity: 1;
}

.vc-handle {
  position: absolute !important;
  top: var(--vc-handle-top);
  left: 5px;
  background: var(--vc-handle-color);
  border-radius: var(--vc-handle-border-radius);
  box-shadow: var(--vc-handle-shadow);
}

.vc-handle {
  width: var(--vc-handle-width);
  height: var(--vc-handle-height);
}

.vc-handle:before {
  content: "";
  top: 50%;
  left: 50%;
  position: absolute !important;
  margin: -6px 0 0 -6px;
  width: 12px;
  height: 12px;
  border-radius: 6px;
}

.vc-switch-label:active ~ .vc-handle, .vc-handle:active {
  width: var(--vc-onclick-width);
}

.vc-switch-input:checked ~ .vc-handle {
  left: unset;
  right: 5px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
   z-index: 5; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    padding: 20px;
    border: 1px solid #888;
    width: 100%;
    position: fixed;
    height: 100%;
    overflow-y: auto;
margin-bottom:20px;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 58px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}





 nav > svg {
    -webkit-filter: drop-shadow(0 1px 9px rgba(0, 0, 0, 0.09));
    filter: drop-shadow(0 -1px 6px rgba(0, 0, 0, 0.2));
    position: absolute;
    right: 50%;
    bottom: -2px;
    -moz-transform: translateX(50%);
    -webkit-transform: translateX(50%);
    -o-transform: translateX(50%.);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
    /* background: #000; */
}   
.footer_path {
    fill: #ffffff;
    fill-rule: evenodd;
}
.toolbar-bottom {
    top: auto;
}

 .toolbar {
    top: 56px;
}

 .toolbar {
    position: fixed;
}
.navbar ~ .toolbar {
    z-index: 4;
}

.toolbar-bottom {
    bottom: 0;
    top: auto;
}


.tabbar {
    z-index: 5001;
    bottom: auto;
    top: 0;
}
.toolbar {
    left: 0;
    bottom: 0;
    height: 48px;
    font-size: 14px;
}


.toolbar {
 width: 100%;
    box-sizing: border-box;
    top: auto;
    margin: 0;
    height: 70px;
    z-index: 500;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    color: #fff;
    background: #f7f7f7;
border-top: 2px solid #38cf5b!important;
}



nav#nav {
    display: flex;
    width: 100%;
    max-width: 760px !important;
    margin: 0 auto;
    position: relative;
    z-index: 1;
    font-size: 17px;
}

nav#nav {
    background: transparent;
}

.tabbar .toolbar-inner {
    padding-left: 0;
    padding-right: 0;
}
.toolbar-inner {
    background-color: transparent;
}

.toolbar-inner {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
}

 .toolbar-inner {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    box-sizing: border-box;
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}



.tabbar a.tab-link {
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    overflow: hidden;
    color: #77b868 !important
    position: relative;
}
.tab-link i {
    font-size: 23px;
    padding-bottom: 3px;
}
.tabbar a.link, .tabbar a.tab-link {
    height: 100%;
    width: 100%;
    box-sizing: border-box;
    padding-left: 0;
    padding-right: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    -ms-flex: 1;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column;
    font-size: 14px;
    text-transform: uppercase;
}

.toolbar a {
    -webkit-box-flex: 1;
    -webkit-flex-shrink: 1;
    -ms-flex: 0 1 auto;
    flex-shrink: 1;
    position: relative;
    white-space: nowrap;
    text-overflow: ellipsis;
}
 .tab-link{
    -webkit-user-select: none;
    user-select: none;
}


.tabbar a.tab-link {
    color: #3db922  !important
}
.toolbaricontext {
    font-size: 12px;
    padding-top: 0;
    margin: 0;
}
#homebut .toolbaricontext {
    padding-top: 2px;
}
a#homebut {
    color: #fff !important;
    background-color: #3db922  !important;
   
    margin-right: 0;
}

a#homebut {
    position: absolute;
    right: 50%;
    top: -35px;
    -moz-transform: translateX(50%);
    -webkit-transform: translateX(50%);
    -o-transform: translateX(50%.);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
    width: 47px;
    height: 47px;
    color: #FFF;
    text-align: center;
    border-radius: 50%;
    font-size: 20px;
    line-height: 50px;
    z-index: 50;
}

.tabbar a.tab-link.active {
    color: #fff;
}

a#homebut {
    color: #fff !important;
}

.tabbar a.link, .tabbar a.tab-link {
    font-size: 17px;
    text-transform: uppercase;
    padding-top: 2px;
    margin-right: 3%;
}
.toolbar-inner svg {
    height: 54px;
}
nav#nav {
    font-size: 17px;
}
@media screen and (min-width: 768px) {
.toolbar-bottom{display:none;}
}

@media screen and (min-width: 768px) {
.toolbar-bottom{display:none !important;}
}


#dear_app{

margin-bottom:300px;

}
.fillcover{
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
}
.dont_click {
pointer-events: none ;
}
.nav-link{
color:#555555 !important;
}

.page-item.active .page-link {
background-color: #3db922 !important;
    border-color: #3db922 !important;
}
.abyekiha_bg{
background-color: #3db922 !important;
}
.abyekiha_text{
color: #3db922 !important;
}
.fill_textarea{
 width: 100%;
    height: 100%;
    resize: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; 
}


.order-history > p {
  font-size: 1.3rem;
  font-weight: 600;
}

.order-division {
  padding-right: 8px;
  list-style-type: none;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

.class-service {
  padding: 8px;
  display: flex;
}

.number-of-orders {
  width: 24px;
  height: 24px;
  text-align: center;
  background: #c5c5c5;
  margin-right: 4px;
  border-radius: 5px;
  color: #fff;
}

.class-service.fs-6.active {
  color: #ff0000;
  border-bottom: 2px solid #3db922;

}
.class-service.fs-6.active .number-of-orders  {
   background: #3db922;
}
.special-background {
 
}

@media only screen and (max-width: 1439px) {
  .class-service {
    font-size: 14px;
    font-weight: 600;
  }
}

@media only screen and (max-width: 1023px) {
  .class-service {
    font-size: 10px;
    align-items: center;
    font-weight: 700;
  }

  .number-of-orders {
    display: flex;
    justify-content: center;
    align-items: center;
  }
}

@media only screen and (max-width: 767px) {
  .order-division {
    flex-direction: column;
    align-items: flex-start;
  }

  .class-service {
    align-items: center;
    justify-content: space-between;
    display: flex;
    width: 65%;
  }

  .on-it-1 {
    border-left: 1px solid;
  }
}

.display_1{
display: block !important;
}
.display_0{
visibility: hidden!important;
}
.flex_0{

 text-align: left;
    display: flex;

    align-content: space-around;
    flex-direction: row;
    justify-content: flex-end;
    flex-wrap: nowrap;
}

@media (max-width: 992px){
.price{

    height: 55px;
}
}
.justify_flex_end_0{
    display: flex;
    float: left;
    flex-direction: row;
    justify-content: flex-end;
}

.justify_flex_end_1 {
    display: flex;
    flex-direction: row;
	justify-content: space-between;
}


.product-name,
.user-personal-information,
.myAccount-buttons {
  text-align: right;    font-size: 14px;
}
.myAccount-buttons {background:#fff;
 
}
.profile-buttons {
  border-bottom: 1px solid #9e9e9e;
}

@media only screen and (max-width: 425px) {
  .user-information {
    flex-wrap: wrap-reverse !important;
  }

  .myAccount-buttons {
    font-size: 11px !important;
  }
}

.nav-tabs .nav-link {
    font-size: 12px !important;
}
.max_w_200{
max-width: 200px !important;
}
.w-product{
    max-width: 185px !important;
    min-width: 137px !important;
}
@media (max-width: 279px){
.plus {
  display:none;
}
.nav-tabs .nav-link {
    font-size: 11px!important;
}
.w-product{
    max-width: 120px !important;
    min-width: 95px !important;
}
}
.wh-180{
    display: flex;
    height: 234px;
    width: 180px;
    margin-bottom: 20px !important;
    flex-direction: column;
    justify-content: space-between;
    align-content: flex-start;
    flex-wrap: nowrap;
}  

.mw-1000{
max-width: 1000px !important;
}
.mih-290{
    min-height: 290px !important;
}
.price-plus{
min-height: 75px !important;
}
.wh-290{
  max-width: 290px !important;
    max-height: 290px !important;
}
.wh-120{
  max-width: 120px !important;
    max-height: 120px !important;
}

.c_e0{
    color: #e0e0e0;
}
.pointer{
cursor: pointer;

}
.melo_gray{
background: #f5f5f5;
}

.product-pictures {
    margin-top: 48px;
}

.my-chevron-up,.my-chevron-down{
    width: 24px;
    display: flex;
    height: 24px;
    font-size: 30px;
    justify-content: space-around;
}

.picture-of-product {
    width: 32px;
    height: 32px;
    margin: 8px 0px;
}

.chosen-picture {
    margin-top: 80px;
}

.name-of-product {
    margin-top: 40px;
}

.buying-section {
    width: 350px;
    height: 320px;
    margin-top: 80px;
}

.relative-products {
    margin-top: 40px;
}

.relative-product-link {
    height: 152px;
    margin: 8px 0px;
}

.product-information-1 {
    margin-top: 80px;
}

.c-product__seller-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    position: relative;
    min-height: 206px;
justify-content: space-between;
}
.c-product__seller-info {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-left: auto !important;
    max-width: 610px;
    margin-right: auto !important;
    line-height: normal;
    background-color: #f5f5f5;
    border: 1px solid #e4e4e4;
    border-radius: 8px;
}
.c-product__summary {
    max-width: 350px;
}
.bg-fff
{
background-color: #fff;
}
.typeofstore a{
display: flex;

}
.typeofstore a li{
width: 100%;
    
}

.typeofstore {
  padding: 0px !important;
display: flex;
    flex-wrap: wrap;
    margin: auto;
    align-content: space-between;
    flex-direction: row-reverse;
    justify-content: space-around;
}

.on-it {
  background-color: #9bfc9bde !important;
  font-weight: 700 !important;
}

.obj_fit_c{
object-fit: contain;
}
.wf-55{
    width: 125px !important;
    height: 125px !important;
}

/* popover */
details[data-popover] {
  display: inline;
  position: relative;
}
details[data-popover] > summary:focus {
  outline: none;
}
details[data-popover] > summary::-webkit-details-marker {
  display: none;
}
details[data-popover] > summary {
  list-style: none;
  text-decoration: underline dotted teal;
}
details[data-popover] > summary + * {
    position: absolute;
    display: block;
   
    width: 150%;
    border-radius: 11%;
    padding: 10px;
    color: #fff;
    background: #5bd06e;
    border: 1px solid #38cf5b!important;

}

details[data-popover] > summary + *:after {
    position: absolute;
    display: block;
    z-index: 1;
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #4caf50;
}



details[data-popover] > * + * {
  /* hide detail elements that would ruin the popover */
  display: none;
}
details[data-popover="up"] > summary + * {
  bottom: calc(0.5rem + 100%);
  right: 50%;
  transform: translateX(50%);
}
details[data-popover="down"] > summary + * {
  top: calc(0.5rem + 100%);
  right: 50%;
  transform: translateX(50%);
}
details[data-popover="left"] > summary + * {
  right: calc(1rem + 100%);
  bottom: 50%;
  transform: translateY(50%);
}
details[data-popover="right"] > summary + * {
  left: calc(1rem + 100%);
  bottom: 50%;
  transform: translateY(50%);
}
.ckas{
    top: calc(-0.5rem + 100%);
    position: absolute;
    border-color: #38cf5b !important;
    color: #38cf5b;
}

.s_pop{
position: fixed;
    margin-left: auto !important;
    margin-right: auto !important;
    width: 90%;
    max-width: 500px;
    top: 90px;
    left: 0;
    right: 0;
    z-index: 5;
    padding: 9px;
    background-color: #fff;
}
.b_b_cover{
background: #514c496b;
    background: rgb(129 126 126 / 70%);
    width: 100%;
    height: 100%;
    z-index: 4;
    position: fixed;
    top: 0;
    left: 0;
}
#s_popModal{
     z-index: 6;
    position: fixed;    background: #514c496b;
    background: rgb(129 126 126 / 70%);
    width: 100%;
    height: 100%;
    z-index: 4;
    top: 0;
    left: 0;
}
.close_x{
font-size: 40px;
    color: #db4343;
    font-weight: 700;margin: 0;
}
.noradius{
border-top-right-radius: 0;
border-bottom-right-radius: 0;
border-top-left-radius: 0;
border-bottom-left-radius: 0;
}

.soft_red_color {

  color: #e88585;

}