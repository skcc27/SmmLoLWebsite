@extends('layouts.master')

@section('title', 'Information')

@section('body.class','lol-info')

@section('prestylesheet')

    <link href='https://fonts.googleapis.com/css?family=Prompt:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Maitree:400,200,300,500,600,700&subset=thai,latin'
          rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
@endsection

@section('stylesheet')

@endsection

@section('prescript')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js'></script>
@endsection

@section('script')
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Rules -->
        <h1 class="title lol-title">กฎและกติกาการแข่งขัน Samarnmitr LoL Competition</h1>
        <h3 class="subtitle">ผู้เข้าลงแข่งการแข่งขัน</h3>
        <p class="description-info description-indent">
            ผู้เข้าลงแข่งการแข่งขันต้องกำลังศึกษาอยู่หรือเคยศึกษาอยู่ในโรงเรียนสวนกุหลาบวิทยาลัย ณ ปีการศึกษา 2559
            เท่านั้น</p>
        <h3 class="subtitle">รางวัล</h3>
        <dl class="description-info description-indent">
            <dt>ชนะเลิศ</dt>
            <dd>3,000 บาท</dd>
            <dt>รองชนะเลิศอันดับ 1</dt>
            <dd>2,000 บาท</dd>
            <dt>รองชนะเลิศอันดับ 2</dt>
            <dd>1,000 บาท</dd>
        </dl>
        <h3 class="subtitle">ทีม</h3>
        <ul class="description-info">
            <li>แต่ละทีมประกอบด้วยผู้เล่นที่ลงแข่งขัน 5 คน และผู้เล่นสำรอง 1 คน (ถ้ามี)</li>
            <li>ตั้งชื่อทีมและส่งชื่อทีมพร้อมอักษรย่อของทีม (3-4ตัวอักษร) รวมถึงชื่อ-นามสกุล ระดับชั้น-ห้อง รุ่น
                และชื่อในเกมของผู้เล่นทุกคนในทีม(และผู้เล่นสำรอง) ลงในแบบฟอร์มที่ได้ทำการจัดไว้ให้ในเวลาที่กำหนด
            </li>
        </ul>
        <h3 class="subtitle">การแข่งขัน</h3>
        <p class="description-info description-indent">การแข่งขันจะจัดในระบบ Knock-Out (แพ้คัดออก) โดยจะแข่งแบบออนไลน์
            ยกเว้นในรอบชิงชนะเลิศและชิงที่ 3 จะเป็นการแข่งขันในแบบออฟไลน์ ณ โรงเรียนสวนกุหลาบวิทยาลัย ในระบบ Best of 3
            (โดยจะพัก 10 นาทีในแต่ละเกม) ในแผนที่ Summoner’s Rift โหมด Tournament Draft (Pick-Ban)
        </p>
        <h3 class="subtitle">ข้อห้ามในการแข่งขัน</h3>
        <ol class="description-info">
            <li>ห้ามใช้ Macro โปรแกรมช่วยเล่น หรือ Bugs ต่าง ๆ ในการแข่งขัน</li>
            <li>ห้ามพิมพ์ถ้อยคำด่า เชิงรุนแรง เชิงเยอะเย้ย หรือเชิงประชดประชัน ต่อผู้เล่นฝ่ายตรงข้าม</li>
            <li>ห้ามมีการทะเลาะวิวาทกันระหว่างคนในทีม ระหว่างทั้ง 2 ทีม รวมถึงการทะเลาะวิวาทกับทีมงาน หรือคนนอก
                ทั้งในระหว่าง และภายหลังการประกาศผลการแข่งขัน ทั้งในรอบ Knock-Out และ Bo3<br></li>
            <li>คำตัดสินของกรรมการเป็นที่สิ้นสุด</li>
        </ol>
        <!-- Schedule -->
        <h1 class="title lol-title">กำหนดการกิจกรรม</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-1 col-sm-10 col-sm-offset-0 col-xs-12 col-xs-offset-0 center-block">
                <table class="table table-responsive lol-table ">
                    <thead>
                    <tr>
                        <th class="text-center">วันที่</th>
                        <th class="text-center">กิจกรรม</th>
                    </tr>
                    </thead>
                    <tbody class="lol-table-data">
                    <tr>
                        <td>วันที่ 21 สิงหาคม 2559</td>
                        <td>ปิดรับสมัครการแข่งขันผ่านทางเว็บไซต์</td>
                    </tr>
                    <tr>
                        <td>วันที่ 22 - 26 สิงหาคม 2559</td>
                        <td>การแข่งขันรอบที่ 1</td>
                    </tr>
                    <tr>
                        <td>วันที่ 27 - 29 สิงหาคม 2559</td>
                        <td>การแข่งขันรอบที่ 2</td>
                    </tr>
                    <tr>
                        <td>วันที่ 30 - 31 สิงหาคม 2559</td>
                        <td>การแข่งขันรอบที่ 3</td>
                    </tr>
                    <tr>
                        <td>วันที่ 1 - 2 กันยายน 2559</td>
                        <td>การแข่งขันรอบ Semi-Final</td>
                    </tr>
                    <tr>
                        <td>วันที่ 5 กันยายน 2559</td>
                        <td>การแข่งขันรอบ Final</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
