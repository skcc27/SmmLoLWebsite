<section>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-6">
                    <h1 class="title lol-title">Samarnmitr <span class="lol">League of Legends</span> Competition</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="intro">
                        &emsp;&emsp;การแข่งขันเพื่อเฟ้นหาทีมสายเลือดชมพู - ฟ้า ผู้เป็นที่หนึ่งในเกม
                        <span class="lol">League of Legends</span> ที่กำลังได้รับความนิยมอยู่ในปัจจุบัน
                        ภายใต้การสนับสนุนของ Garena ค่ายเกมออนไลน์ยักษ์ใหญ่ของประเทศไทย เพื่อชิงเงินรางวัลมูลค่ารวมกว่า
                        6,000 บาท โดยสมัครเข้าร่วมการแข่งขันครั้งนี้ได้ฟรี!
                        ถ้าหากว่าคุณพร้อมที่จะเข้ามาฟาดฟันในสมรภูมิแห่งเกม <span class="lol">League
                     of Legends</span> แล้วละก็รีบสมัครเข้าร่วมการแข่งขันนี้ได้เลย !!!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="btn-container col-md-6 col-xs-12 col-sm-12">
                    <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2 center">
                        <!-- Need to link with register ajax. -->
                        <button id="registerBtn"
                                onclick="window.location = '/team/register'"
                                class="lol-button register mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                            Register
                        </button>
                    </div>
                    <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2 center">
                            <!-- Need to make it smooth scroll down when clicked. -->
                        <button id="moreInfo"
                                onclick="window.location = '/info'"
                                class="lol-button more-info mdl-button mdl-js-button mdl-js-ripple-effect">Info
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sponsor left">Sponsored by
                </div>
            </div>
            @include('lol.sponsor')
        </div>
    </div>
</section>
