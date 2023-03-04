<div class="contact-section text-white">
  <div class="block mx-auto pt-5">
    <div class="box mx-auto pt-5">
      <div class="title-inner mb-5 pb-1 mt-3">
        <div class="title fs-55 lh-12 mb-2">
          <span class="d-block"> WE’D LOVE TO</span>
          <span class="d-block">HEAR FROM YOU</span>
        </div>
        <p class="notoSansTC">為了提供更完善的服務請務必輸入正確的資料，我們將盡快請專人回覆，謝謝您！</p>
      </div>
      <div class="form-inner">
          <form id="contactForm" action="">
            <div class="row row-cols-2 notoSansTC gx-5 mb-4">
              <div>
                <div class="form-group fs-16">
                    <label for="name">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名&nbsp;*</label>
                    <input id="name" name="name" type="text">
                </div>
              </div>
              <div>
                <div class="form-group fs-16">
                    <label for="tel">電&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;話&nbsp;*</label>
                    <input id="tel" name="tel" type="text">
                </div>
              </div>

            </div>
            <div class="row row-cols-2 notoSansTC gx-5">
              <div>
                <div class="form-group fs-16">
                    <label for="email">電子信箱&nbsp;*</label>
                    <input id="email" name="email" type="email">
                </div>
              </div>
              <div>
                <div class="form-group fs-16">
                    <label for="verification">驗&nbsp;證&nbsp;碼&nbsp;*</label>
                    <div class="d-flex flex-grow-1">
                      <input id="verification" name="verification" type="text">
                      <img src="styles/images/common/verification.jpg" alt="">
                    </div>
                </div>
              </div>
            </div>
            <button class="submit fs-18 bg-hover-golden" type="button">送出表單</button>
          </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-body">
        請輸入正確資料
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-body">
          <img src="styles/images/common/contact-build.webp" alt="">
          <div class="text">
            <p class="fs-28 fw-bold">表單已成功送出</p>
            <p class="fs-18 mb-4">請耐心等候一些時間，客服人員將盡速與您聯繫，謝謝！</p>
            <button type="button" class="btn bg-hover-golden" data-bs-dismiss="modal">關閉</button>
        </div>
        </div>
    </div>
  </div>
</div>
