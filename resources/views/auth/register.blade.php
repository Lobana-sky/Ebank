
<!doctype html>
<html lang="en">

<head>
<title>:: {{session('app_name') }} :: Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<style>
   
@import url('https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap');
body.font-nunito {
    font-family: "El Messiri", sans-serif;
}

</style>
</head>

<body data-theme="light" class="font-nunito">
	
	<div id="wrapper" class="theme-cyan">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
            <div class="top">
                <!-- <img src="assets/images/logo-white.svg" alt="Iconic"> -->
                <img src="assets/images/{{session('logo')}}" alt="Iconic">
            </div>
					  <div class="card" style="direction:rtl">
                     <div class="header">
                        <div class="card-header" style="text-align:right">{{ __('تسجيل جديد') }}
                         </div>
                        </div>
                     <div class="body" >
                        <form method="Post" action="{{ route('register') }}" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" required placeholder=" اسم المستخدم" aria-label="اسم المستخدم"  name ="name" aria-describedby="basic-addon1">
                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <select class="custom-select" required name="role" id="role">
                                    <option selected value="4">  مسؤول </option>
                                </select>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                           </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" required placeholder="الاسم الاول" aria-label="الاسم الأول" name="first_name" aria-describedby="basic-addon1">
                                 @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" required placeholder=" الكنية" aria-label=" الكنية"name="last_name" -describedby="basic-addon1">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="text" class="form-control" required placeholder="البريد الالكتروني"  name="email" aria-label="'البريد الالكتروني " aria-describedby="basic-addon2">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="input-group mb-3">
                                  الجنس:
                                    <label class="fancy-radio custom-color-green"><input name="gender" value="0" type="radio" ><span><i></i>Male</span></label>
                                    <label class="fancy-radio custom-color-green"><input name="gender" value="1" type="radio" ><span><i></i>Female</span></label>
                                    
                                       @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <select name="nationality" class="custom-select" id="state" required="">
                                         <option value=""> اختر البلد</option>
                                          <option value="AFGHANISTAN">
                                            AFGHANISTAN
                                          </option>
                                         <option value="ALBANIA">
                                            ALBANIA
                                         </option>
                                          <option value="ALGERIA">
                                            ALGERIA</option>
                                          <option value="AMERICAN SAMOA">
                                            AMERICAN SAMOA</option>
                                          <option value="ANDORRA">
                                            ANDORRA</option>
                                          <option value="ANGOLA">
                                            ANGOLA</option>
                                           <option value="ANGUILLA">
                                            ANGUILLA</option>
                                          <option value="ANTARCTICA">
                                            ANTARCTICA</option>
                                          <option value="ANTIGUA AND BARBUDA">
                                            ANTIGUA AND BARBUDA</option>
                                           <option value="ARGENTINA">
                                            ARGENTINA</option>
                                            <option value="ARMENIA">
                                            ARMENIA</option>
                                            <option value="ARUBA">
                                            ARUBA</option>
                                            <option value="AUSTRALIA">
                                            AUSTRALIA</option>
                                             <option value="AUSTRIA">
                                            AUSTRIA</option>
                                          <option value="AZERBAIJAN">
                                            AZERBAIJAN</option>
                                           <option value="BAHAMAS">
                                            BAHAMAS</option>
                                           <option value="BAHRAIN">
                                            BAHRAIN</option>
                                            <option value="BANGLADESH">
                                            BANGLADESH</option>
                                           <option value="BARBADOS">
                                            BARBADOS</option>
                                           <option value="BELARUS">
                                            BELARUS</option>
                                           <option value="BELGIUM">
                                            BELGIUM</option>
                                           <option value="BELIZE">
                                            BELIZE</option>
                                           <option value="BENIN">
                                            BENIN</option>
                                           <option value="BERMUDA">
                                            BERMUDA</option>
                                          <option value="BHUTAN">
                                            BHUTAN</option>
                                           <option value="BOLIVIA">
                                            BOLIVIA</option>
                                           <option value="BOSNIA AND HERZEGOVINA">
                                            BOSNIA AND HERZEGOVINA</option>
                                           <option value="BOTSWANA">
                                            BOTSWANA</option>
                                           <option value="BOUVET ISLAND">
                                            BOUVET ISLAND</option>
                                           <option value="BRAZIL">
                                            BRAZIL</option>
                                            <option value="BRITISH INDIAN OCEAN TERRITORY">
                                            BRITISH INDIAN OCEAN TERRITORY</option>
                                           <option value="BRUNEI DARUSSALAM">
                                            BRUNEI DARUSSALAM</option>
                                           <option value="BULGARIA">
                                            BULGARIA</option>
                                            <option value="BURKINA FASO">
                                            BURKINA FASO</option>
                                           <option value="BURUNDI">
                                            BURUNDI</option>
                                         <option value="CAMBODIA">
                                            CAMBODIA</option>
                                         <option value="CAMEROON">
                                            CAMEROON</option>
                                         <option value="CANADA">
                                            CANADA</option>
                                            <option value="CAPE VERDE">
                                            CAPE VERDE</option>
                                          <option value="CAYMAN ISLANDS">
                                            CAYMAN ISLANDS</option>
                                            <option value="CENTRAL AFRICAN REPUBLIC">
                                            CENTRAL AFRICAN REPUBLIC</option>
                                              <option value="CHAD">
                                            CHAD</option>
                                                <option value="CHILE">
                                            CHILE</option>
                                              <option value="CHINA">
                                            CHINA</option>
                                            <option value="CHRISTMAS ISLAND">
                                            CHRISTMAS ISLAND</option>
                                            <option value="COCOS (KEELING) ISLANDS">
                                            COCOS (KEELING) ISLANDS</option>
                                            option value="COLOMBIA">
                                            COLOMBIA</option>
                                              <option value="COMOROS">
                                            COMOROS</option>
                                              <option value="CONGO">
                                            CONGO</option>
                                              <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">
                                            CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                                 <option value="COOK ISLANDS">
                                            COOK ISLANDS</option>
                                                        <option value="COSTA RICA">
                                            COSTA RICA</option>
                                                                                                                                                                      
                                                                                   <option value="COTE D'IVOIRE">
                                            COTE D'IVOIRE</option>
                                                                                                                                                                      
                                                                                   <option value="CROATIA">
                                            CROATIA</option>
                                                                                                                                                                      
                                                                                   <option value="CUBA">
                                            CUBA</option>
                                                                                                                                                                      
                                                                                   <option value="CYPRUS">
                                            CYPRUS</option>
                                                                                                                                                                      
                                                                                   <option value="CZECH REPUBLIC">
                                            CZECH REPUBLIC</option>
                                                                                                                                                                      
                                                                                   <option value="DENMARK">
                                            DENMARK</option>
                                                                                                                                                                      
                                                                                   <option value="DJIBOUTI">
                                            DJIBOUTI</option>
                                                                                                                                                                      
                                                                                   <option value="DOMINICA">
                                            DOMINICA</option>
                                                                                                                                                                      
                                                                                   <option value="DOMINICAN REPUBLIC">
                                            DOMINICAN REPUBLIC</option>
                                                                                                                                                                      
                                                                                   <option value="ECUADOR">
                                            ECUADOR</option>
                                                                                                                                                                      
                                                                                   <option value="EGYPT">
                                            EGYPT</option>
                                                                                                                                                                      
                                                                                   <option value="EL SALVADOR">
                                            EL SALVADOR</option>
                                                                                                                                                                      
                                                                                   <option value="EQUATORIAL GUINEA">
                                            EQUATORIAL GUINEA</option>
                                                                                                                                                                      
                                                                                   <option value="ERITREA">
                                            ERITREA</option>
                                                                                                                                                                      
                                                                                   <option value="ESTONIA">
                                            ESTONIA</option>
                                                                                                                                                                      
                                                                                   <option value="ETHIOPIA">
                                            ETHIOPIA</option>
                                                                                                                                                                      
                                                                                   <option value="FALKLAND ISLANDS (MALVINAS)">
                                            FALKLAND ISLANDS (MALVINAS)</option>
                                                                                                                                                                      
                                                                                   <option value="FAROE ISLANDS">
                                            FAROE ISLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="FIJI">
                                            FIJI</option>
                                                                                                                                                                      
                                                                                   <option value="FINLAND">
                                            FINLAND</option>
                                                                                                                                                                      
                                                                                   <option value="FRANCE">
                                            FRANCE</option>
                                                                                                                                                                      
                                                                                   <option value="FRENCH GUIANA">
                                            FRENCH GUIANA</option>
                                                                                                                                                                      
                                                                                   <option value="FRENCH POLYNESIA">
                                            FRENCH POLYNESIA</option>
                                                                                                                                                                      
                                                                                   <option value="FRENCH SOUTHERN TERRITORIES">
                                            FRENCH SOUTHERN TERRITORIES</option>
                                                                                                                                                                      
                                                                                   <option value="GABON">
                                            GABON</option>
                                                                                                                                                                      
                                                                                   <option value="GAMBIA">
                                            GAMBIA</option>
                                                                                                                                                                      
                                                                                   <option value="GEORGIA">
                                            GEORGIA</option>
                                                                                                                                                                      
                                                                                   <option value="GERMANY">
                                            GERMANY</option>
                                                                                                                                                                      
                                                                                   <option value="GHANA">
                                            GHANA</option>
                                                                                                                                                                      
                                                                                   <option value="GIBRALTAR">
                                            GIBRALTAR</option>
                                                                                                                                                                      
                                                                                   <option value="GREECE">
                                            GREECE</option>
                                                                                                                                                                      
                                                                                   <option value="GREENLAND">
                                            GREENLAND</option>
                                                                                                                                                                      
                                                                                   <option value="GRENADA">
                                            GRENADA</option>
                                                                                                                                                                      
                                                                                   <option value="GUADELOUPE">
                                            GUADELOUPE</option>
                                                                                                                                                                      
                                                                                   <option value="GUAM">
                                            GUAM</option>
                                                                                                                                                                      
                                                                                   <option value="GUATEMALA">
                                            GUATEMALA</option>
                                                                                                                                                                      
                                                                                   <option value="GUINEA">
                                            GUINEA</option>
                                                                                                                                                                      
                                                                                   <option value="GUINEA-BISSAU">
                                            GUINEA-BISSAU</option>
                                                                                                                                                                      
                                                                                   <option value="GUYANA">
                                            GUYANA</option>
                                                                                                                                                                      
                                                                                   <option value="HAITI">
                                            HAITI</option>
                                                                                                                                                                      
                                                                                   <option value="HEARD ISLAND AND MCDONALD ISLANDS">
                                            HEARD ISLAND AND MCDONALD ISLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="HOLY SEE (VATICAN CITY STATE)">
                                            HOLY SEE (VATICAN CITY STATE)</option>
                                                                                                                                                                      
                                                                                   <option value="HONDURAS">
                                            HONDURAS</option>
                                                                                                                                                                      
                                                                                   <option value="HONG KONG">
                                            HONG KONG</option>
                                                                                                                                                                      
                                                                                   <option value="HUNGARY">
                                            HUNGARY</option>
                                                                                                                                                                      
                                                                                   <option value="ICELAND">
                                            ICELAND</option>
                                                                                                                                                                      
                                                                                   <option value="INDIA">
                                            INDIA</option>
                                                                                                                                                                      
                                                                                   <option value="INDONESIA">
                                            INDONESIA</option>
                                                                                                                                                                      
                                                                                   <option value="IRAN, ISLAMIC REPUBLIC OF">
                                            IRAN, ISLAMIC REPUBLIC OF</option>
                                                                                                                                                                      
                                                                                   <option value="IRAQ">
                                            IRAQ</option>
                                                                                                                                                                      
                                                                                   <option value="IRELAND">
                                            IRELAND</option>
                                                                                                                                                                      
                                                                                   <option value="ISRAEL">
                                            ISRAEL</option>
                                                                                                                                                                      
                                                                                   <option value="ITALY">
                                            ITALY</option>
                                                                                                                                                                      
                                                                                   <option value="JAMAICA">
                                            JAMAICA</option>
                                                                                                                                                                      
                                                                                   <option value="JAPAN">
                                            JAPAN</option>
                                                                                                                                                                      
                                                                                   <option value="JORDAN">
                                            JORDAN</option>
                                                                                                                                                                      
                                                                                   <option value="KAZAKHSTAN">
                                            KAZAKHSTAN</option>
                                                                                                                                                                      
                                                                                   <option value="KENYA">
                                            KENYA</option>
                                                                                                                                                                      
                                                                                   <option value="KIRIBATI">
                                            KIRIBATI</option>
                                                                                                                                                                      
                                                                                   <option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF">
                                            KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                                                                                                                                                                      
                                                                                   <option value="KOREA, REPUBLIC OF">
                                            KOREA, REPUBLIC OF</option>
                                                                                                                                                                      
                                                                                   <option value="KUWAIT">
                                            KUWAIT</option>
                                                                                                                                                                      
                                                                                   <option value="KYRGYZSTAN">
                                            KYRGYZSTAN</option>
                                                                                                                                                                      
                                                                                   <option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">
                                            LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                                                                                                                                                                      
                                                                                   <option value="LATVIA">
                                            LATVIA</option>
                                                                                                                                                                      
                                                                                   <option value="LEBANON">
                                            LEBANON</option>
                                                                                                                                                                      
                                                                                   <option value="LESOTHO">
                                            LESOTHO</option>
                                                                                                                                                                      
                                                                                   <option value="LIBERIA">
                                            LIBERIA</option>
                                                                                                                                                                      
                                                                                   <option value="LIBYAN ARAB JAMAHIRIYA">
                                            LIBYAN ARAB JAMAHIRIYA</option>
                                                                                                                                                                      
                                                                                   <option value="LIECHTENSTEIN">
                                            LIECHTENSTEIN</option>
                                                                                                                                                                      
                                                                                   <option value="LITHUANIA">
                                            LITHUANIA</option>
                                                                                                                                                                      
                                                                                   <option value="LUXEMBOURG">
                                            LUXEMBOURG</option>
                                                                                                                                                                      
                                                                                   <option value="MACAO">
                                            MACAO</option>
                                                                                                                                                                      
                                                                                   <option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">
                                            MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                                                                                                                                                      
                                                                                   <option value="MADAGASCAR">
                                            MADAGASCAR</option>
                                                                                                                                                                      
                                                                                   <option value="MALAWI">
                                            MALAWI</option>
                                                                                                                                                                      
                                                                                   <option value="MALAYSIA">
                                            MALAYSIA</option>
                                                                                                                                                                      
                                                                                   <option value="MALDIVES">
                                            MALDIVES</option>
                                                                                                                                                                      
                                                                                   <option value="MALI">
                                            MALI</option>
                                                                                                                                                                      
                                                                                   <option value="MALTA">
                                            MALTA</option>
                                                                                                                                                                      
                                                                                   <option value="MARSHALL ISLANDS">
                                            MARSHALL ISLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="MARTINIQUE">
                                            MARTINIQUE</option>
                                                                                                                                                                      
                                                                                   <option value="MAURITANIA">
                                            MAURITANIA</option>
                                                                                                                                                                      
                                                                                   <option value="MAURITIUS">
                                            MAURITIUS</option>
                                                                                                                                                                      
                                                                                   <option value="MAYOTTE">
                                            MAYOTTE</option>
                                                                                                                                                                      
                                                                                   <option value="MEXICO">
                                            MEXICO</option>
                                                                                                                                                                      
                                                                                   <option value="MICRONESIA, FEDERATED STATES OF">
                                            MICRONESIA, FEDERATED STATES OF</option>
                                                                                                                                                                      
                                                                                   <option value="MOLDOVA, REPUBLIC OF">
                                            MOLDOVA, REPUBLIC OF</option>
                                                                                                                                                                      
                                                                                   <option value="MONACO">
                                            MONACO</option>
                                                                                                                                                                      
                                                                                   <option value="MONGOLIA">
                                            MONGOLIA</option>
                                                                                                                                                                      
                                                                                   <option value="MONTSERRAT">
                                            MONTSERRAT</option>
                                                                                                                                                                      
                                                                                   <option value="MOROCCO">
                                            MOROCCO</option>
                                                                                                                                                                      
                                                                                   <option value="MOZAMBIQUE">
                                            MOZAMBIQUE</option>
                                                                                                                                                                      
                                                                                   <option value="MYANMAR">
                                            MYANMAR</option>
                                                                                                                                                                      
                                                                                   <option value="NAMIBIA">
                                            NAMIBIA</option>
                                                                                                                                                                      
                                                                                   <option value="NAURU">
                                            NAURU</option>
                                                                                                                                                                      
                                                                                   <option value="NEPAL">
                                            NEPAL</option>
                                                                                                                                                                      
                                                                                   <option value="NETHERLANDS">
                                            NETHERLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="NETHERLANDS ANTILLES">
                                            NETHERLANDS ANTILLES</option>
                                                                                                                                                                      
                                                                                   <option value="NEW CALEDONIA">
                                            NEW CALEDONIA</option>
                                                                                                                                                                      
                                                                                   <option value="NEW ZEALAND">
                                            NEW ZEALAND</option>
                                                                                                                                                                      
                                                                                   <option value="NICARAGUA">
                                            NICARAGUA</option>
                                                                                                                                                                      
                                                                                   <option value="NIGER">
                                            NIGER</option>
                                                                                                                                                                      
                                                                                   <option value="NIGERIA">
                                            NIGERIA</option>
                                                                                                                                                                      
                                                                                   <option value="NIUE">
                                            NIUE</option>
                                                                                                                                                                      
                                                                                   <option value="NORFOLK ISLAND">
                                            NORFOLK ISLAND</option>
                                                                                                                                                                      
                                                                                   <option value="NORTHERN MARIANA ISLANDS">
                                            NORTHERN MARIANA ISLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="NORWAY">
                                            NORWAY</option>
                                                                                                                                                                      
                                                                                   <option value="OMAN">
                                            OMAN</option>
                                                                                                                                                                      
                                                                                   <option value="PAKISTAN">
                                            PAKISTAN</option>
                                                                                                                                                                      
                                                                                   <option value="PALAU">
                                            PALAU</option>
                                                                                                                                                                      
                                                                                   <option value="PALESTINIAN TERRITORY, OCCUPIED">
                                            PALESTINIAN TERRITORY, OCCUPIED</option>
                                                                                                                                                                      
                                                                                   <option value="PANAMA">
                                            PANAMA</option>
                                                                                                                                                                      
                                                                                   <option value="PAPUA NEW GUINEA">
                                            PAPUA NEW GUINEA</option>
                                                                                                                                                                      
                                                                                   <option value="PARAGUAY">
                                            PARAGUAY</option>
                                                                                                                                                                      
                                                                                   <option value="PERU">
                                            PERU</option>
                                                                                                                                                                      
                                                                                   <option value="PHILIPPINES">
                                            PHILIPPINES</option>
                                                                                                                                                                      
                                                                                   <option value="PITCAIRN">
                                            PITCAIRN</option>
                                                                                                                                                                      
                                                                                   <option value="POLAND">
                                            POLAND</option>
                                                                                                                                                                      
                                                                                   <option value="PORTUGAL">
                                            PORTUGAL</option>
                                                                                                                                                                      
                                                                                   <option value="PUERTO RICO">
                                            PUERTO RICO</option>
                                                                                                                                                                      
                                                                                   <option value="QATAR">
                                            QATAR</option>
                                                                                                                                                                      
                                                                                   <option value="REUNION">
                                            REUNION</option>
                                                                                                                                                                      
                                                                                   <option value="ROMANIA">
                                            ROMANIA</option>
                                                                                                                                                                      
                                                                                   <option value="RUSSIAN FEDERATION">
                                            RUSSIAN FEDERATION</option>
                                                                                                                                                                      
                                                                                   <option value="RWANDA">
                                            RWANDA</option>
                                                                                                                                                                      
                                                                                   <option value="SAINT HELENA">
                                            SAINT HELENA</option>
                                                                                                                                                                      
                                                                                   <option value="SAINT KITTS AND NEVIS">
                                            SAINT KITTS AND NEVIS</option>
                                                                                                                                                                      
                                                                                   <option value="SAINT LUCIA">
                                            SAINT LUCIA</option>
                                                                                                                                                                      
                                                                                   <option value="SAINT PIERRE AND MIQUELON">
                                            SAINT PIERRE AND MIQUELON</option>
                                                                                                                                                                      
                                                                                   <option value="SAINT VINCENT AND THE GRENADINES">
                                            SAINT VINCENT AND THE GRENADINES</option>
                                                                                                                                                                      
                                                                                   <option value="SAMOA">
                                            SAMOA</option>
                                                                                                                                                                      
                                                                                   <option value="SAN MARINO">
                                            SAN MARINO</option>
                                                                                                                                                                      
                                                                                   <option value="SAO TOME AND PRINCIPE">
                                            SAO TOME AND PRINCIPE</option>
                                                                                                                                                                      
                                                                                   <option value="SAUDI ARABIA">
                                            SAUDI ARABIA</option>
                                                                                                                                                                      
                                                                                   <option value="SENEGAL">
                                            SENEGAL</option>
                                                                                                                                                                      
                                                                                   <option value="SERBIA AND MONTENEGRO">
                                            SERBIA AND MONTENEGRO</option>
                                                                                                                                                                      
                                                                                   <option value="SEYCHELLES">
                                            SEYCHELLES</option>
                                                                                                                                                                      
                                                                                   <option value="SIERRA LEONE">
                                            SIERRA LEONE</option>
                                                                                                                                                                      
                                                                                   <option value="SINGAPORE">
                                            SINGAPORE</option>
                                                                                                                                                                      
                                                                                   <option value="SLOVAKIA">
                                            SLOVAKIA</option>
                                                                                                                                                                      
                                                                                   <option value="SLOVENIA">
                                            SLOVENIA</option>
                                                                                                                                                                      
                                                                                   <option value="SOLOMON ISLANDS">
                                            SOLOMON ISLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="SOMALIA">
                                            SOMALIA</option>
                                                                                                                                                                      
                                                                                   <option value="SOUTH AFRICA">
                                            SOUTH AFRICA</option>
                                                                                                                                                                      
                                                                                   <option value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS">
                                            SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="SPAIN">
                                            SPAIN</option>
                                                                                                                                                                      
                                                                                   <option value="SRI LANKA">
                                            SRI LANKA</option>
                                                                                                                                                                      
                                                                                   <option value="SUDAN">
                                            SUDAN</option>
                                                                                                                                                                      
                                                                                   <option value="SURINAME">
                                            SURINAME</option>
                                                                                                                                                                      
                                                                                   <option value="SVALBARD AND JAN MAYEN">
                                            SVALBARD AND JAN MAYEN</option>
                                                                                                                                                                      
                                                                                   <option value="SWAZILAND">
                                            SWAZILAND</option>
                                                                                                                                                                      
                                                                                   <option value="SWEDEN">
                                            SWEDEN</option>
                                                                                                                                                                      
                                                                                   <option value="SWITZERLAND">
                                            SWITZERLAND</option>
                                                                                                                                                                      
                                                                                   <option value="SYRIAN">
                                            SYRIAN</option>
                                                                                                                                                                      
                                                                                   <option value="TAIWAN, PROVINCE OF CHINA">
                                            TAIWAN, PROVINCE OF CHINA</option>
                                                                                                                                                                      
                                                                                   <option value="TAJIKISTAN">
                                            TAJIKISTAN</option>
                                                                                                                                                                      
                                                                                   <option value="TANZANIA, UNITED REPUBLIC OF">
                                            TANZANIA, UNITED REPUBLIC OF</option>
                                                                                                                                                                      
                                                                                   <option value="THAILAND">
                                            THAILAND</option>
                                                                                                                                                                      
                                                                                   <option value="TIMOR-LESTE">
                                            TIMOR-LESTE</option>
                                                                                                                                                                      
                                                                                   <option value="TOGO">
                                            TOGO</option>
                                                                                                                                                                      
                                                                                   <option value="TOKELAU">
                                            TOKELAU</option>
                                                                                                                                                                      
                                                                                   <option value="TONGA">
                                            TONGA</option>
                                                                                                                                                                      
                                                                                   <option value="TRINIDAD AND TOBAGO">
                                            TRINIDAD AND TOBAGO</option>
                                                                                                                                                                      
                                                                                   <option value="TUNISIA">
                                            TUNISIA</option>
                                                                                                                                                                      
                                                                                   <option value="TURKEY">
                                            TURKEY</option>
                                                                                                                                                                      
                                                                                   <option value="TURKMENISTAN">
                                            TURKMENISTAN</option>
                                                                                                                                                                      
                                                                                   <option value="TURKS AND CAICOS ISLANDS">
                                            TURKS AND CAICOS ISLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="TUVALU">
                                            TUVALU</option>
                                                                                                                                                                      
                                                                                   <option value="UGANDA">
                                            UGANDA</option>
                                                                                                                                                                      
                                                                                   <option value="UKRAINE">
                                            UKRAINE</option>
                                                                                                                                                                      
                                                                                   <option value="UNITED ARAB EMIRATES">
                                            UNITED ARAB EMIRATES</option>
                                                                                                                                                                      
                                                                                   <option value="UNITED KINGDOM">
                                            UNITED KINGDOM</option>
                                                                                                                                                                      
                                                                                   <option value="UNITED STATES">
                                            UNITED STATES</option>
                                                                                                                                                                      
                                                                                   <option value="UNITED STATES MINOR OUTLYING ISLANDS">
                                            UNITED STATES MINOR OUTLYING ISLANDS</option>
                                                                                                                                                                      
                                                                                   <option value="URUGUAY">
                                            URUGUAY</option>
                                                                                                                                                                      
                                                                                   <option value="UZBEKISTAN">
                                            UZBEKISTAN</option>
                                                                                                                                                                      
                                                                                   <option value="VANUATU">
                                            VANUATU</option>
                                                                                                                                                                      
                                                                                   <option value="VENEZUELA">
                                            VENEZUELA</option>
                                                                                                                                                                      
                                                                                   <option value="VIET NAM">
                                            VIET NAM</option>
                                                                                                                                                                      
                                                                                   <option value="VIRGIN ISLANDS, BRITISH">
                                            VIRGIN ISLANDS, BRITISH</option>
                                                                                                                                                                      
                                                                                   <option value="VIRGIN ISLANDS, U.S.">
                                            VIRGIN ISLANDS, U.S.</option>
                                                                                                                                                                      
                                                                                   <option value="WALLIS AND FUTUNA">
                                            WALLIS AND FUTUNA</option>
                                                                                                                                                                      
                                                                                   <option value="WESTERN SAHARA">
                                            WESTERN SAHARA</option>
                                                                                                                                                                      
                                                                                   <option value="YEMEN">
                                            YEMEN</option>
                                                                                                                                                                      
                                                                                   <option value="ZAMBIA">
                                            ZAMBIA</option>
                                                                                                                                                                      
                                                                                   <option value="ZIMBABWE">
                                            ZIMBABWE</option>
                                                                                                                                            
                                    </select>
                                    @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                           </div>
                        
                            <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                                <input type="password" class="form-control" required placeholder=" كلمة السر" aria-label=" كلمة السر"name="password" -describedby="basic-addon1">
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                            </div>  
                            

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"> </i></span>
                                </div>
                          
                              <input  type="password" class="form-control" name="password_confirmation" placeholder=" تأكيد كلمة السر" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <input type="text" class="form-control" required style="direction:ltr" placeholder=" 538 9899 096" aria-label=" رقم الهاتف"name="mobile" describedby="basic-addon1">
                                  </div>                    
                            <select  class="custom-select" required  name="code" >
                            
                               <option value="">اختر البلد   </option>
                               <option value="+93">
                                 (+93) AFGHANISTAN</option>
                               <option value="+355">
                                 (+355) ALBANIA</option>
                               <option value="+213">
                                 (+213) ALGERIA</option>
                                <option value="+1684">
                                 (+1684) AMERICAN SAMOA</option>
                                <option value="+376">
                                 (+376) ANDORRA</option>
                                 <option value="+244">
                                 (+244) ANGOLA</option>
                                 <option value="+1264">
                                 (+1264) ANGUILLA</option>
                                  <option value="+0">
                                 (+0) ANTARCTICA</option>
                                  <option value="+1268">
                                 (+1268) ANTIGUA AND BARBUDA</option>
                                  <option value="+54">
                                 (+54) ARGENTINA</option>
                                   <option value="+374">
                                 (+374) ARMENIA</option>
                                  <option value="+297">
                                 (+297) ARUBA</option>
                                   <option value="+61">
                                 (+61) AUSTRALIA</option>
                                   <option value="+43">
                                 (+43) AUSTRIA</option>
                                 <option value="+994">
                                 (+994) AZERBAIJAN</option>
                                  <option value="+1242">
                                 (+1242) BAHAMAS</option>
                                   <option value="+973">
                                 (+973) BAHRAIN</option>
                                  <option value="+880">
                                 (+880) BANGLADESH</option>
                                  <option value="+1246">
                                 (+1246) BARBADOS</option>
                                   <option value="+375">
                                 (+375) BELARUS</option>
                                  <option value="+32">
                                 (+32) BELGIUM</option>
                                   <option value="+501">
                                 (+501) BELIZE</option>
                                  <option value="+229">
                                 (+229) BENIN</option>
                                  <option value="+1441">
                                 (+1441) BERMUDA</option>
                                  <option value="+975">
                                 (+975) BHUTAN</option>
                                  <option value="+591">
                                 (+591) BOLIVIA</option>
                                  <option value="+387">
                                 (+387) BOSNIA AND HERZEGOVINA</option>
                                   <option value="+267">
                                 (+267) BOTSWANA</option>
                                   <option value="+0">
                                 (+0) BOUVET ISLAND</option>
                                   <option value="+55">
                                 (+55) BRAZIL</option>
                                  <option value="+246">
                                 (+246) BRITISH INDIAN OCEAN TERRITORY</option>
                                                                       
                                 <option value="+673">
                                   (+673) BRUNEI DARUSSALAM</option>
                                   <option value="+359">
                                   (+359) BULGARIA</option>
                                   <option value="+226">
                                   (+226) BURKINA FASO</option>
                                   <option value="+257">
                                   (+257) BURUNDI</option>
                                   <option value="+855">
                                   (+855) CAMBODIA</option>
                                   <option value="+237">
                                    (+237) CAMEROON</option>
                                   <option value="+1">
                                     (+1) CANADA</option>
                                  <option value="+238">
                                 (+238) CAPE VERDE</option>
                                   <option value="+1345">
                                 (+1345) CAYMAN ISLANDS</option>
                                  <option value="+236">
                                 (+236) CENTRAL AFRICAN REPUBLIC</option>
                                   <option value="+235">
                                 (+235) CHAD</option>
                                 <option value="+56">
                                 (+56) CHILE</option>
                                                                                                                                                            
                                                                         <option value="+86">
                                 (+86) CHINA</option>
                                                                                                                                                            
                                                                         <option value="+61">
                                 (+61) CHRISTMAS ISLAND</option>
                                                                                                                                                            
                                                                         <option value="+672">
                                 (+672) COCOS (KEELING) ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+57">
                                 (+57) COLOMBIA</option>
                                                                                                                                                            
                                                                         <option value="+269">
                                 (+269) COMOROS</option>
                                                                                                                                                            
                                                                         <option value="+242">
                                 (+242) CONGO</option>
                                                                                                                                                            
                                                                         <option value="+242">
                                 (+242) CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                                                                                                                                            
                                                                         <option value="+682">
                                 (+682) COOK ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+506">
                                 (+506) COSTA RICA</option>
                                                                                                                                                            
                                                                         <option value="+225">
                                 (+225) COTE D'IVOIRE</option>
                                                                                                                                                            
                                                                         <option value="+385">
                                 (+385) CROATIA</option>
                                                                                                                                                            
                                                                         <option value="+53">
                                 (+53) CUBA</option>
                                                                                                                                                            
                                                                         <option value="+357">
                                 (+357) CYPRUS</option>
                                                                                                                                                            
                                                                         <option value="+420">
                                 (+420) CZECH REPUBLIC</option>
                                                                                                                                                            
                                                                         <option value="+45">
                                 (+45) DENMARK</option>
                                                                                                                                                            
                                                                         <option value="+253">
                                 (+253) DJIBOUTI</option>
                                                                                                                                                            
                                                                         <option value="+1767">
                                 (+1767) DOMINICA</option>
                                                                                                                                                            
                                                                         <option value="+1809">
                                 (+1809) DOMINICAN REPUBLIC</option>
                                                                                                                                                            
                                                                         <option value="+593">
                                 (+593) ECUADOR</option>
                                                                                                                                                            
                                                                         <option value="+20">
                                 (+20) EGYPT</option>
                                                                                                                                                            
                                                                         <option value="+503">
                                 (+503) EL SALVADOR</option>
                                                                                                                                                            
                                                                         <option value="+240">
                                 (+240) EQUATORIAL GUINEA</option>
                                                                                                                                                            
                                                                         <option value="+291">
                                 (+291) ERITREA</option>
                                                                                                                                                            
                                                                         <option value="+372">
                                 (+372) ESTONIA</option>
                                                                                                                                                            
                                                                         <option value="+251">
                                 (+251) ETHIOPIA</option>
                                                                                                                                                            
                                                                         <option value="+500">
                                 (+500) FALKLAND ISLANDS (MALVINAS)</option>
                                                                                                                                                            
                                                                         <option value="+298">
                                 (+298) FAROE ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+679">
                                 (+679) FIJI</option>
                                                                                                                                                            
                                                                         <option value="+358">
                                 (+358) FINLAND</option>
                                                                                                                                                            
                                                                         <option value="+33">
                                 (+33) FRANCE</option>
                                                                                                                                                            
                                                                         <option value="+594">
                                 (+594) FRENCH GUIANA</option>
                                                                                                                                                            
                                                                         <option value="+689">
                                 (+689) FRENCH POLYNESIA</option>
                                                                                                                                                            
                                                                         <option value="+0">
                                 (+0) FRENCH SOUTHERN TERRITORIES</option>
                                                                                                                                                            
                                                                         <option value="+241">
                                 (+241) GABON</option>
                                                                                                                                                            
                                                                         <option value="+220">
                                 (+220) GAMBIA</option>
                                                                                                                                                            
                                                                         <option value="+995">
                                 (+995) GEORGIA</option>
                                                                                                                                                            
                                                                         <option value="+49">
                                 (+49) GERMANY</option>
                                                                                                                                                            
                                                                         <option value="+233">
                                 (+233) GHANA</option>
                                                                                                                                                            
                                                                         <option value="+350">
                                 (+350) GIBRALTAR</option>
                                                                                                                                                            
                                                                         <option value="+30">
                                 (+30) GREECE</option>
                                                                                                                                                            
                                                                         <option value="+299">
                                 (+299) GREENLAND</option>
                                                                                                                                                            
                                                                         <option value="+1473">
                                 (+1473) GRENADA</option>
                                                                                                                                                            
                                                                         <option value="+590">
                                 (+590) GUADELOUPE</option>
                                                                                                                                                            
                                                                         <option value="+1671">
                                 (+1671) GUAM</option>
                                                                                                                                                            
                                                                         <option value="+502">
                                 (+502) GUATEMALA</option>
                                                                                                                                                            
                                                                         <option value="+224">
                                 (+224) GUINEA</option>
                                                                                                                                                            
                                                                         <option value="+245">
                                 (+245) GUINEA-BISSAU</option>
                                                                                                                                                            
                                                                         <option value="+592">
                                 (+592) GUYANA</option>
                                                                                                                                                            
                                                                         <option value="+509">
                                 (+509) HAITI</option>
                                                                                                                                                            
                                                                         <option value="+0">
                                 (+0) HEARD ISLAND AND MCDONALD ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+39">
                                 (+39) HOLY SEE (VATICAN CITY STATE)</option>
                                                                                                                                                            
                                                                         <option value="+504">
                                 (+504) HONDURAS</option>
                                                                                                                                                            
                                                                         <option value="+852">
                                 (+852) HONG KONG</option>
                                                                                                                                                            
                                                                         <option value="+36">
                                 (+36) HUNGARY</option>
                                                                                                                                                            
                                                                         <option value="+354">
                                 (+354) ICELAND</option>
                                                                                                                                                            
                                                                         <option value="+91">
                                 (+91) INDIA</option>
                                                                                                                                                            
                                                                         <option value="+62">
                                 (+62) INDONESIA</option>
                                                                                                                                                            
                                                                         <option value="+98">
                                 (+98) IRAN, ISLAMIC REPUBLIC OF</option>
                                                                                                                                                            
                                                                         <option value="+964">
                                 (+964) IRAQ</option>
                                                                                                                                                            
                                                                         <option value="+353">
                                 (+353) IRELAND</option>
                                                                                                                                                            
                                                                         <option value="+972">
                                 (+972) ISRAEL</option>
                                                                                                                                                            
                                                                         <option value="+39">
                                 (+39) ITALY</option>
                                                                                                                                                            
                                                                         <option value="+1876">
                                 (+1876) JAMAICA</option>
                                                                                                                                                            
                                                                         <option value="+81">
                                 (+81) JAPAN</option>
                                                                                                                                                            
                                                                         <option value="+962">
                                 (+962) JORDAN</option>
                                                                                                                                                            
                                                                         <option value="+7">
                                 (+7) KAZAKHSTAN</option>
                                                                                                                                                            
                                                                         <option value="+254">
                                 (+254) KENYA</option>
                                                                                                                                                            
                                                                         <option value="+686">
                                 (+686) KIRIBATI</option>
                                                                                                                                                            
                                                                         <option value="+850">
                                 (+850) KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                                                                                                                                                            
                                                                         <option value="+82">
                                 (+82) KOREA, REPUBLIC OF</option>
                                                                                                                                                            
                                                                         <option value="+965">
                                 (+965) KUWAIT</option>
                                                                                                                                                            
                                                                         <option value="+996">
                                 (+996) KYRGYZSTAN</option>
                                                                                                                                                            
                                                                         <option value="+856">
                                 (+856) LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                                                                                                                                                            
                                                                         <option value="+371">
                                 (+371) LATVIA</option>
                                                                                                                                                            
                                                                         <option value="+961">
                                 (+961) LEBANON</option>
                                                                                                                                                            
                                                                         <option value="+266">
                                 (+266) LESOTHO</option>
                                                                                                                                                            
                                                                         <option value="+231">
                                 (+231) LIBERIA</option>
                                                                                                                                                            
                                                                         <option value="+218">
                                 (+218) LIBYAN ARAB JAMAHIRIYA</option>
                                                                                                                                                            
                                                                         <option value="+423">
                                 (+423) LIECHTENSTEIN</option>
                                                                                                                                                            
                                                                         <option value="+370">
                                 (+370) LITHUANIA</option>
                                                                                                                                                            
                                                                         <option value="+352">
                                 (+352) LUXEMBOURG</option>
                                                                                                                                                            
                                                                         <option value="+853">
                                 (+853) MACAO</option>
                                                                                                                                                            
                                                                         <option value="+389">
                                 (+389) MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                                                                                                                                            
                                                                         <option value="+261">
                                 (+261) MADAGASCAR</option>
                                                                                                                                                            
                                                                         <option value="+265">
                                 (+265) MALAWI</option>
                                                                                                                                                            
                                                                         <option value="+60">
                                 (+60) MALAYSIA</option>
                                                                                                                                                            
                                                                         <option value="+960">
                                 (+960) MALDIVES</option>
                                                                                                                                                            
                                                                         <option value="+223">
                                 (+223) MALI</option>
                                                                                                                                                            
                                                                         <option value="+356">
                                 (+356) MALTA</option>
                                                                                                                                                            
                                                                         <option value="+692">
                                 (+692) MARSHALL ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+596">
                                 (+596) MARTINIQUE</option>
                                                                                                                                                            
                                                                         <option value="+222">
                                 (+222) MAURITANIA</option>
                                                                                                                                                            
                                                                         <option value="+230">
                                 (+230) MAURITIUS</option>
                                                                                                                                                            
                                                                         <option value="+269">
                                 (+269) MAYOTTE</option>
                                                                                                                                                            
                                                                         <option value="+52">
                                 (+52) MEXICO</option>
                                                                                                                                                            
                                                                         <option value="+691">
                                 (+691) MICRONESIA, FEDERATED STATES OF</option>
                                                                                                                                                            
                                                                         <option value="+373">
                                 (+373) MOLDOVA, REPUBLIC OF</option>
                                                                                                                                                            
                                                                         <option value="+377">
                                 (+377) MONACO</option>
                                                                                                                                                            
                                                                         <option value="+976">
                                 (+976) MONGOLIA</option>
                                                                                                                                                            
                                                                         <option value="+1664">
                                 (+1664) MONTSERRAT</option>
                                                                                                                                                            
                                                                         <option value="+212">
                                 (+212) MOROCCO</option>
                                                                                                                                                            
                                                                         <option value="+258">
                                 (+258) MOZAMBIQUE</option>
                                                                                                                                                            
                                                                         <option value="+95">
                                 (+95) MYANMAR</option>
                                                                                                                                                            
                                                                         <option value="+264">
                                 (+264) NAMIBIA</option>
                                                                                                                                                            
                                                                         <option value="+674">
                                 (+674) NAURU</option>
                                                                                                                                                            
                                                                         <option value="+977">
                                 (+977) NEPAL</option>
                                                                                                                                                            
                                                                         <option value="+31">
                                 (+31) NETHERLANDS</option>
                                                                                                                                                            
                                                                         <option value="+599">
                                 (+599) NETHERLANDS ANTILLES</option>
                                                                                                                                                            
                                                                         <option value="+687">
                                 (+687) NEW CALEDONIA</option>
                                                                                                                                                            
                                                                         <option value="+64">
                                 (+64) NEW ZEALAND</option>
                                                                                                                                                            
                                                                         <option value="+505">
                                 (+505) NICARAGUA</option>
                                                                                                                                                            
                                                                         <option value="+227">
                                 (+227) NIGER</option>
                                                                                                                                                            
                                                                         <option value="+234">
                                 (+234) NIGERIA</option>
                                                                                                                                                            
                                                                         <option value="+683">
                                 (+683) NIUE</option>
                                                                                                                                                            
                                                                         <option value="+672">
                                 (+672) NORFOLK ISLAND</option>
                                                                                                                                                            
                                                                         <option value="+1670">
                                 (+1670) NORTHERN MARIANA ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+47">
                                 (+47) NORWAY</option>
                                                                                                                                                            
                                                                         <option value="+968">
                                 (+968) OMAN</option>
                                                                                                                                                            
                                                                         <option value="+92">
                                 (+92) PAKISTAN</option>
                                                                                                                                                            
                                                                         <option value="+680">
                                 (+680) PALAU</option>
                                                                                                                                                            
                                                                         <option value="+970">
                                 (+970) PALESTINIAN TERRITORY, OCCUPIED</option>
                                                                                                                                                            
                                                                         <option value="+507">
                                 (+507) PANAMA</option>
                                                                                                                                                            
                                                                         <option value="+675">
                                 (+675) PAPUA NEW GUINEA</option>
                                                                                                                                                            
                                                                         <option value="+595">
                                 (+595) PARAGUAY</option>
                                                                                                                                                            
                                                                         <option value="+51">
                                 (+51) PERU</option>
                                                                                                                                                            
                                                                         <option value="+63">
                                 (+63) PHILIPPINES</option>
                                                                                                                                                            
                                                                         <option value="+0">
                                 (+0) PITCAIRN</option>
                                                                                                                                                            
                                                                         <option value="+48">
                                 (+48) POLAND</option>
                                                                                                                                                            
                                                                         <option value="+351">
                                 (+351) PORTUGAL</option>
                                                                                                                                                            
                                                                         <option value="+1787">
                                 (+1787) PUERTO RICO</option>
                                                                                                                                                            
                                                                         <option value="+974">
                                 (+974) QATAR</option>
                                                                                                                                                            
                                                                         <option value="+262">
                                 (+262) REUNION</option>
                                                                                                                                                            
                                                                         <option value="+40">
                                 (+40) ROMANIA</option>
                                                                                                                                                            
                                                                         <option value="+70">
                                 (+70) RUSSIAN FEDERATION</option>
                                                                                                                                                            
                                                                         <option value="+250">
                                 (+250) RWANDA</option>
                                                                                                                                                            
                                                                         <option value="+290">
                                 (+290) SAINT HELENA</option>
                                                                                                                                                            
                                                                         <option value="+1869">
                                 (+1869) SAINT KITTS AND NEVIS</option>
                                                                                                                                                            
                                                                         <option value="+1758">
                                 (+1758) SAINT LUCIA</option>
                                                                                                                                                            
                                                                         <option value="+508">
                                 (+508) SAINT PIERRE AND MIQUELON</option>
                                                                                                                                                            
                                                                         <option value="+1784">
                                 (+1784) SAINT VINCENT AND THE GRENADINES</option>
                                                                                                                                                            
                                                                         <option value="+684">
                                 (+684) SAMOA</option>
                                                                                                                                                            
                                                                         <option value="+378">
                                 (+378) SAN MARINO</option>
                                                                                                                                                            
                                                                         <option value="+239">
                                 (+239) SAO TOME AND PRINCIPE</option>
                                                                                                                                                            
                                                                         <option value="+966">
                                 (+966) SAUDI ARABIA</option>
                                                                                                                                                            
                                                                         <option value="+221">
                                 (+221) SENEGAL</option>
                                                                                                                                                            
                                                                         <option value="+381">
                                 (+381) SERBIA AND MONTENEGRO</option>
                                                                                                                                                            
                                                                         <option value="+248">
                                 (+248) SEYCHELLES</option>
                                                                                                                                                            
                                                                         <option value="+232">
                                 (+232) SIERRA LEONE</option>
                                                                                                                                                            
                                                                         <option value="+65">
                                 (+65) SINGAPORE</option>
                                                                                                                                                            
                                                                         <option value="+421">
                                 (+421) SLOVAKIA</option>
                                                                                                                                                            
                                                                         <option value="+386">
                                 (+386) SLOVENIA</option>
                                                                                                                                                            
                                                                         <option value="+677">
                                 (+677) SOLOMON ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+252">
                                 (+252) SOMALIA</option>
                                                                                                                                                            
                                                                         <option value="+27">
                                 (+27) SOUTH AFRICA</option>
                                                                                                                                                            
                                                                         <option value="+0">
                                 (+0) SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+34">
                                 (+34) SPAIN</option>
                                                                                                                                                            
                                                                         <option value="+94">
                                 (+94) SRI LANKA</option>
                                                                                                                                                            
                                                                         <option value="+249">
                                 (+249) SUDAN</option>
                                                                                                                                                            
                                                                         <option value="+597">
                                 (+597) SURINAME</option>
                                                                                                                                                            
                                                                         <option value="+47">
                                 (+47) SVALBARD AND JAN MAYEN</option>
                                                                                                                                                            
                                                                         <option value="+268">
                                 (+268) SWAZILAND</option>
                                                                                                                                                            
                                                                         <option value="+46">
                                 (+46) SWEDEN</option>
                                                                                                                                                            
                                                                         <option value="+41">
                                 (+41) SWITZERLAND</option>
                                                                                                                                                            
                                                                         <option value="+963">
                                 (+963) SYRIAN</option>
                                                                                                                                                            
                                                                         <option value="+886">
                                 (+886) TAIWAN, PROVINCE OF CHINA</option>
                                                                                                                                                            
                                                                         <option value="+992">
                                 (+992) TAJIKISTAN</option>
                                                                                                                                                            
                                                                         <option value="+255">
                                 (+255) TANZANIA, UNITED REPUBLIC OF</option>
                                                                                                                                                            
                                                                         <option value="+66">
                                 (+66) THAILAND</option>
                                                                                                                                                            
                                                                         <option value="+670">
                                 (+670) TIMOR-LESTE</option>
                                                                                                                                                            
                                                                         <option value="+228">
                                 (+228) TOGO</option>
                                                                                                                                                            
                                                                         <option value="+690">
                                 (+690) TOKELAU</option>
                                                                                                                                                            
                                                                         <option value="+676">
                                 (+676) TONGA</option>
                                                                                                                                                            
                                                                         <option value="+1868">
                                 (+1868) TRINIDAD AND TOBAGO</option>
                                                                                                                                                            
                                                                         <option value="+216">
                                 (+216) TUNISIA</option>
                                                                                                                                                            
                                                                         <option value="+90">
                                 (+90) TURKEY</option>
                                                                                                                                                            
                                                                         <option value="+7370">
                                 (+7370) TURKMENISTAN</option>
                                                                                                                                                            
                                                                         <option value="+1649">
                                 (+1649) TURKS AND CAICOS ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+688">
                                 (+688) TUVALU</option>
                                                                                                                                                            
                                                                         <option value="+256">
                                 (+256) UGANDA</option>
                                                                                                                                                            
                                                                         <option value="+380">
                                 (+380) UKRAINE</option>
                                                                                                                                                            
                                                                         <option value="+971">
                                 (+971) UNITED ARAB EMIRATES</option>
                                                                                                                                                            
                                                                         <option value="+44">
                                 (+44) UNITED KINGDOM</option>
                                                                                                                                                            
                                                                         <option value="+1">
                                 (+1) UNITED STATES</option>
                                                                                                                                                            
                                                                         <option value="+1">
                                 (+1) UNITED STATES MINOR OUTLYING ISLANDS</option>
                                                                                                                                                            
                                                                         <option value="+598">
                                 (+598) URUGUAY</option>
                                                                                                                                                            
                                                                         <option value="+998">
                                 (+998) UZBEKISTAN</option>
                                                                                                                                                            
                                                                         <option value="+678">
                                 (+678) VANUATU</option>
                                                                                                                                                            
                                                                         <option value="+58">
                                 (+58) VENEZUELA</option>
                                                                                                                                                            
                                                                         <option value="+84">
                                 (+84) VIET NAM</option>
                                                                                                                                                            
                                                                         <option value="+1284">
                                 (+1284) VIRGIN ISLANDS, BRITISH</option>
                                                                                                                                                            
                                                                         <option value="+1340">
                                 (+1340) VIRGIN ISLANDS, U.S.</option>
                                                                                                                                                            
                                                                         <option value="+681">
                                 (+681) WALLIS AND FUTUNA</option>
                                                                                                                                                            
                                                                         <option value="+212">
                                 (+212) WESTERN SAHARA</option>
                                                                                                                                                            
                                                                         <option value="+967">
                                 (+967) YEMEN</option>
                                                                                                                                                            
                                                                         <option value="+260">
                                 (+260) ZAMBIA</option>
                                                                                                                                                            
                                                                         <option value="+263">
                                 (+263) ZIMBABWE</option>
                                                                                                                                                                                   
                          
                                  
                                  </select>
                                       @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                            
                             </div>
                               
                           </div>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                           
                         <div class="modal-footer">  
                               <button type="submit" class="btn btn-primary">حفظ</button>
                               <a href="/" class="btn btn-secondary">الغاء الأمر</a>
                         </div>      
                        </form>
                
                      </div>
                    </div>
				</div>
			</div>
		</div>
	</div>

    
</body>
</html>