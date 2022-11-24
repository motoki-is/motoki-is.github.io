<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <title>Contact</title>
  <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/> -->
  <link rel="stylesheet" href="css/style.css">
  <script>
    window.addEventListener("beforeunload", function (event) {
      var confirmationMessage = "入力内容を破棄します。";

      event.returnValue = confirmationMessage;
      return confirmationMessage;
    });
  </script>
</head>

<body>

<?php
 include "./add/header.php" 
 ?>

  <h1 class="title_contact">Contact</h1>
  
  <p class="formnavi">お見積りのご依頼や、お仕事に関するお問い合わせ等、お気軽にお問い合わせください。</p><br>
  
  <div class="contact">
    <form>
        <label class="form-label">お名前 </label><br>
          <!-- <div class="row"> -->
            <div class="col-sm">
              <input type="text"
                     name="name"
                     autocomplete="name"
                     class="form-control"
                     required/>
            </div><br><br>
        <label class="form-label">ふりがな</label><br>
        <!-- <div class="row"> -->
            <div class="col-sm">
              <input type="text"
                     name="name"
                     autocomplete="name"
                     class="form-control"
                     required/>
            </div><br><br>
        <label class="form-label">電話番号</label><br>
        <div class="col-sm">
          <p>
            <input type="tel" name="tel" autocomplete="tel" class="form-control" required/>
          </p>
        </div><br><br>
        <label class="form-label">メールアドレス</label><br>
        <div class="col-sm">
          <p>
            <input type="email" name="email" autocomplete="email" class="form-control"required/>
          </p>
        </div><br><br><br>
        <label class="form-label">お問い合わせ内容</label><br>
        <div class="col-sm_q">
          <p>
            <input type="email" name="email" autocomplete="email" class="form-control"required/>
          </p>
        </div><br><br>


      <div id="end">
					<p class="last">上記のフォームにお問い合わせ内容をご記入の上、<a class="modal_open" href="#">個人情報保護方針</a>をお読みいただき、同意いただけた方は、「次へ」ボタンをクリックして、次におすすみください。</p>
			</div>

    </form>

  </div>

  <div class="btn_contact">
         <button type="submit" class="btn-primary">次へ</button>
  </div>

<p class="white3"></p>

<?php 
include "./add/footer.php"
 ?>



<div id="modal"><div id="privacy">
		<a class="close">CLOSE</a>
		<div class="txt">
			<h2>個人情報保護方針</h2>
			<p>株式会社cifaka（以下、「当社」といいます）は経営理念の一つである「顧客第一主義の徹底」の基、個人情報の保護を重要事項として位置づけ、「個人情報保護方針」を以下のとおり定め実施して参ります。</p>
			<p>
				１．コンプライアンス・プログラムの策定と継続的改善<br>
				当社の役員及び従業員は個人情報保護の重要性を認識し、個人情報を保護するためのコンプライアンス・プログラムを策定し、これを実施し、維持し、継続的に改善します。
			</p>
			<p>
				２．個人情報の収集、利用、提供<br>
				当社の事業内容及び業務実態に応じた、個人情報を収集・利用・提供するにあたって、当社が定めた規定に従い適切に取り扱います。
			</p>
			<p>
				３．安全対策の実施<br>
				当社は、個人情報が社外に流出し、不当に改ざんされるトラブルを引き起こさないよう、規定を定め安全対策を実施し、個人情報への不正アクセス、個人情報の紛失、破壊、改ざん、漏えいを予防します。
			</p>
			<p>
				４．権利の尊重<br>
				当社は、個人情報に関する個人の権利を尊重し、自己の個人情報について開示、訂正、削除を求められたときは、社会通念や慣行に照らし適切に対応します。
			</p>
			<p>
				５．法令・規範の遵守<br>
				当社は、個人情報に関する法令及びその他の規範を遵守し、全社員が個人情報保護の重要性を理解し、適正な取扱い方法を実施します。
			</p>
			<p>
				2015年3月27日<br>
				株式会社cifaka<br>
				代表取締役　作元 大輔
			</p>
		</div>
	</div></div>



<script type="text/javascript" src="js/contact.js"></script>

</body>

</lang=>