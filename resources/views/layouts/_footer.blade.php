<style>
    /* footer */

    .footer {
        margin-top: 45px;
        padding-top: 5px;
        border-top: 1px solid #eaeaea;
        color: #777;
    }
    .footer a {
        color: #555;
    }

    .footer a:hover {
        color: #222;
    }

    .footer small {
        float: left;
    }

    .footer ul {
        float: right;
        list-style: none;


    }
    .footer li {
        float: left;
        margin-left: 15px;
    }
    .footer img.brand-icon {
        width: 17px;
        height: 17px;
    }

    .footer .slogon {
        font-size: 13px;
        font-weight: bold;
    }

</style>
<div class="col-md-12">
    <footer class="footer">
        <small class="slogon">
            <img class="brand-icon" src="https://lccdn.phphub.org/uploads/images/201612/12/1/iq7WQc2iuW.png?imageView2/1/w/34/h/34">
            <a href="https://laravel-china.org/courses">
                刻意练习，每日精进
            </a>
        </small>
        <nav>
            <ul>
                <li><a href="{{ route('about') }}">关于</a></li>
            </ul>
        </nav>
    </footer>
</div>