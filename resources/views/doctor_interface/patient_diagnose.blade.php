@extends('layouts.app')
@section('content2')
<html>

<head>
   <meta charset="utf-8">
   <title>مركز طبي</title>
   <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
   <style>
      /*********Sub Header*********/
      #subheader {
         width: 100%;
         height: 50px;
         color: #fff;
         font-size: 28px;
         margin-bottom: 5%;
         background: #38d39f;
         line-height: 50px;
         text-align: right;
         padding-right: 5%;
      }

      /*********Section*********/
      section {
         padding: 1%;
      }

      section h1 {
         font-size: 28px;
      }

      .add_but {
         color: rgb(158, 146, 146);
         cursor: cell;
         font-size: 24px;
         padding: 5px 25px;
         background-color: #fff;
         float: left;
         margin: 1%;
      }

      .add_but:hover {
         color: black;
         border: 3px solid #38d39f;
      }

      .content-table {
         width: 100%;
         font-size: 18px;
         min-width: 400px;
         overflow: hidden;
         border-collapse: collapse;
         border-radius: 15px 15px 0px 0px;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }

      .content-table thead tr {
         color: #fff;
         text-align: center;
         font-weight: bold;
         background-color: #38d39f;
      }

      .content-table th,
      .content-table td {
         padding: 1.2% 0.8%;
      }

      .content-table tbody tr {
         border-bottom: 1px solid #dddddd;
         text-align: center;
      }

      .content-table tbody tr:nth-of-type(even) {
         background-color: #f3f3f3;
         color: #39d39f;
         font-weight: bold;
      }

      .content-table tbody tr:last-of-type {
         border-bottom: 2px solid #38d39f;
      }

      .icon a {
         padding: 3% 8%;
         margin: 0%;
         display: block;
      }

      .title_table {
         margin-bottom: 2%;
      }

      @media(max-width:950px) {
         .add_but {
            font-size: 20px;
            margin: 5% 30% 0% 30%;
         }
      }
   </style>
</head>

<body>
   <!--Sub-Header-->
   <div id="subheader">المرضى/ التشخيص</div>
   <!---->
   <section>
      <h1 class="title_table">تشخيصات المريض</h1>
      <table class="content-table">
         <thead>
            <tr>
               <th>ملاحظات</th>
               <th>نتيجة التشخيص</th>
               <th>التشخيص</th>
               <th>تاريخ التشخيص</th>
               <th>رقم التشخيص</th>
            </tr>
         </thead>
         <tbody>
            @foreach($patient_diagnose as $patient_diag)
            <tr>
               <td>{{$patient_diag->comments}}</td>
               <td>{{$patient_diag->solution}}</td>
               <td>{{$patient_diag->complaint}}</td>
               <td>{{$patient_diag->diagnose_date}}</td>
               <td>{{$loop->index+1}}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </section>
   <footer>
      <div class="information">
         <ul>
            <li>العنوان<p>حلب الجديدة جانب مشفى الشهباء</p>
            </li>
            <li><i class="fas fa-map-marker-alt icon-f"></i></li>
            <li>رقم المركز<p>0999999999</p>
            </li>
            <li><i class="fas fa-phone icon-footer"></i></li>
         </ul>
      </div>
      <div class="end">
         <span>الحقوق محفوظة لعام 2021 ©</span>
   </footer>
</body>

</html>
@endsection