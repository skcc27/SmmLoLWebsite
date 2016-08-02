@extends('layouts.master')

@section('title', 'Welcome')

@section('stylesheet')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.amber-orange.min.css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/boon" type="text/css"/>
@endsection

@section('script')
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
@endsection

@section('content')
    <overlay></overlay>
    <div class="text title main">Sammarnmitr League of Legends Competition</div>
    <div class="text content main">&emsp;&emsp;การแข่งขันครั้งนี้จัดขึ้นโดยชุมนุมคอมพิวเตอร์ โรงเรียนสวนกุหาบวิทยาลัย
        เพื่อเฟ้นหาทีมสายเลือดชมพู-ฟ้า ผู้เป็นหนึ่งในเกม League of Legend เกมสไดล์ MOBA
        ที่กำลังได้รับความนิยมอยู่ในปัจจุบัน
        ภายใต้การสนับสนุนของ Garena ค่ายเกมออนไลน์ยักษ์ใหญ่ของประเทศไทย เพื่อชิงรางวัลมูลค่ารวมกว่า 6,000 บาท
        โดยในการสมัครเข้าร่วมการแข่งขันนั้นไม่เสียค่าใช้จ่ายใด ๆ ทั้งสิ้น
        หากว่าคุณพร้อมที่จะเข้ามาฟาดฟันในสมรภูมิแห่งเกม League of Legend แล้ว
        รีบสมัครเข้ามาร่วมการแข่งขันครั้งนี้ได้เลย โดยการแข่งขันรอบชิงชนะเลิศนั้นจะจัดขึ้นในวันจันทร์ที่ 5 กันยายน
        พ.ศ.2559 นี้!!!
    </div>
    <div class="button text main">
        <button id="register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Register</button>
        <button id="more_info" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">More info
        </button>
    </div>
    <div class="image main"></div>
    <overlay class="form-overlay"></overlay>
    <div class="container">
        <div class="form">
            <div class="close"></div>
            <div class="page-container">
                <div class="page">
                    <div class="text title">Register: Team Info</div>
                    <div class="text content full-one" style="left: 20%;width: 60%;">
                        <div>Team name :</div>
                        <input type="text" required>
                        <br>
                        <br>
                        <div>Team Yor :</div>
                        <input type="text" required>
                        <!--<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label formlol">
                          <input class="mdl-textfield__input" type="text" pattern="" id="name">
                          <label class="mdl-textfield__label" for="name">Team Name</label>
                        </div>-->
                    </div>
                </div>
                <div class="page">
                    <div class="text title">Register: Team Leader</div>
                </div>
                <div class="page">
                    <div class="text title">Register: Team Member 2</div>
                </div>
                <div class="page">
                    <div class="text title">Register: Team Member 3</div>
                </div>
                <div class="page">
                    <div class="text title">Register: Team Member 4</div>
                </div>
                <div class="page">
                    <div class="text title">Register: Team Member 5</div>
                </div>
                <div class="page">
                    <div class="text title">Register: Team Member 6 (Optional)</div>
                </div>
                <div class="page">
                    <div class="text title">Register: Rules</div>
                </div>
            </div>
            <!-- เพิ่มปุ่ม Back ด้วยนาจา-->
            <button id="next" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Next</button>
            <div class="process"></div>
        </div>
    </div>
@endsection