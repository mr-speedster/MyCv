<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>MyCv as PDF</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Nunito', sans-serif;
        }
        .main-content {
            min-height: 100vh;
            width: 100%;
            margin: 2rem auto;
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }

        .left-section {
            grid-column: span 2;
            height: 100%;
            background-color: #00324A;
        }

        .right-section {
            grid-column: span 5;
            background-color: #f7f7f7;
            height: 100%;
        }


        .left-content {
            padding: 2rem 3rem;
        }

        .profile {
            width: 100%;
            border-bottom: 1px solid #002333;
        }

        .image {
            width: 100%;
            text-align: center;
        }

        .profile img {
            width: 100%;
            border-radius: 50%;
            border: 8px solid #002333;

        }

        .name {
            font-size: 2rem;
            color: white;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 1.2rem 0;
        }

        .career {
            font-size: 1.2rem;
            color: #94D9EA;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding-bottom: 1rem;
        }

        .main-title {
            font-size: 1.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #f7f7f7ec;
            padding-top: 3rem;
        }

        .contact-info ul {
            padding-top: 2rem;
        }

        .contact-info ul li {
            padding: .4rem 0;
            display: flex;
            align-items: center;
            color: #718096;
        }

        .contact-info ul li i {
            padding-right: 1rem;
            font-size: 1.2rem;
            color: #2D9CDB;
        }

        .skills-section ul {
            padding-top: 2rem;
        }

        .skills-section ul li {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            padding: .4rem 0;
        }

        .progress-bar {
            width: 100%;
            height: .4rem;
            background-color: #2f81ed5b;
            position: relative;
            border-radius: 12px;
        }

        .progress {
            height: 100%;
            position: absolute;
            left: 0;
            background-color: #2D9CDB;
            border-radius: 12px;
        }

        .js-progress {
            width: 70%;
        }

        .ps-progress {
            width: 90%;
        }

        .j-progress {
            width: 85%;
        }

        .c-progress {
            width: 40%;
        }

        .n-progress {
            width: 63%;
        }

        .w-progress {
            width: 78%;
        }


        .skill-title {
            text-transform: uppercase;
            color: #f7f7f7;
            font-size: 1rem;
        }

        .sub-title {
            padding-top: 2rem;
            font-size: 1.2rem;
            text-transform: uppercase;
            color: #f7f7f7;
        }

        .sub-para {
            color: #ccc;
            padding: .4rem 0;
        }

        .references-section li {
            color: #ccc;
            padding: .2rem 0;
        }

        .references-section li i {
            padding-right: .5rem;
            font-size: 1.2rem;
            color: #2D9CDB;
        }

        .right-main-content {
            padding: 2rem 3rem;
        }


        .right-title {
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #2F80ED;
            margin-bottom: 1.2rem;
            position: relative;
        }

        .right-title::after {
            content: "";
            position: absolute;
            width: 60%;
            height: .2rem;
            background-color: #ccc;
            border-radius: 12px;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .para {
            line-height: 1.6rem;
            color: #718096;
            font-size: 1.1rem;
        }

        .sect {
            padding-bottom: 2rem;
        }

        .timeline {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .tl-title {
            letter-spacing: 1px;
            font-size: 1.3rem;
            color: #002333;
            text-transform: uppercase;
        }

        .tl-title-2 {
            letter-spacing: 1px;
            font-size: 1.3rem;
            color: #2D9CDB;
            text-transform: uppercase;
        }

        .tl-content {
            border-left: 1px solid #ccc;
            padding-left: 2rem;
            position: relative;
            padding-bottom: 2rem;
        }

        .tl-title-2::before {
            content: "";
            position: absolute;
            width: .7rem;
            height: .7rem;
            background-color: #2D9CDB;
            border-radius: 50%;
            transform: translateX(-50%);
            left: 0;
        }

        /*Media Querries*/
        @media screen and (max-width:823px) {
            .right-title::after {
                width: 40%;
            }
        }

        @media screen and (max-width:681px) {
            .right-title::after {
                width: 30%;
            }
        }

        @media screen and (max-width:780px) {
            .timeline {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        @media screen and (max-width:780px) {
            .left-section {
                grid-column: span 3;
            }

            .right-section {
                grid-column: span 4;
            }
        }

        @media screen and (max-width:1200px) {
            .main-content {
                grid-template-columns: repeat(1, 1fr);
            }

            .profile img {
                width: 40%;
            }
        }

        @media screen and (max-width:700px) {
            .profile img {
                width: 60%;
            }
        }

        @media screen and (max-width:390px) {
            .name {
                font-size: 1.5rem;
            }
        }

    </style>
</head>

<body>
    <main class="main-content">
        <section class="left-section">
            <div class="left-content">
                <div class="profile">
                    <h2 class="name">
                        {{ $data['basicInfo']->first_name }}{{ ' ' . $data['basicInfo']->last_name }}</h2>
                    <p class="career">{{ $data['basicInfo']->profession }}</p>
                </div>
                <div class="contact-info">
                    <h3 class="main-title">Contact Info</h3>
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            {{ $data['basicInfo']->phone }}
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>
                            {{ $data['basicInfo']->email }}
                        </li>
                        <li>
                            <i class="fa fa-globe"></i>
                            {{ $data['basicInfo']->website }}
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="right-section">
            <div class="right-main-content">
                <section class="about sect">
                    <h2 class="right-title">About Me</h2>
                    <p>{{ $data['objective']->career_object }}</p>
                </section>

                <section class="experince sect">
                    <h2 class="right-title">Experience</h2>
                    @foreach ($data['works'] as $work)
                        <div class="timeline">
                            <div class="left-tl-content">
                                <h5 class="tl-title">{{ $work->company_name }}</h5>
                                <h5 class="tl-title">{{ $work->position }}</h5>
                                <p class="para">{{ $work->year }}</p>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                </section>
                <section class="experince sect">
                    <h2 class="right-title">Education</h2>
                    @foreach ($data['educations'] as $edu)
                        <div class="timeline">
                            <div class="left-tl-content">
                                <h5 class="tl-title">{{ $edu->degree }}</h5>
                                <h5 class="tl-title">{{ $edu->institute }}</h5>
                                <p class="para">{{ $edu->year }}</p>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                </section>
                <section class="experince sect">
                    <h2 class="right-title">Certificate</h2>
                    @foreach ($data['cetificates'] as $cer)
                        <div class="timeline">
                            <div class="left-tl-content">
                                <h5 class="tl-title">{{ $cer->certificate_name }}</h5>
                                <h5 class="tl-title">{{ $cer->about }}</h5>
                                <p class="para">{{ $cer->year }}</p>
                            </div>
                        </div>
                        <br><br>
                    @endforeach
                </section>
            </div>
        </section>
        <div class="row">
            <div class="col-6">
                <a href="{{ route('main_index') }}" class="btn btn-danger">Back</a>
            </div>
            <div class="col-6 text-right">
                <a href="{{ url('pdf_download') }}" class="btn btn-success"
                    onclick="return confirm('Are you Sure ?')">Download</a>
            </div>
        </div>
    </main>
    <!-- container -->
    <!-- ptional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
