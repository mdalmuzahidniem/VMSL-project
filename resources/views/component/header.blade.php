<style>
    header ul{
        list-style-type: none;
    }
    header ul li{
        padding: 5px;
    }
    .header{
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 8vh;
        background-image:url({{url('image/header.png')}});
    }
    .header-social a i {
    width: 30px;
    height: 30px;
    color: #FFF;
    background-color: #009CDF;
    border: 2px solid #FFF;
    padding-top: 7px;
    border-radius: 50px;
    font-size: 18px;
    line-height: 16px;
    text-align: center;
}
    
</style>

<header class="header d-flex" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 align-items-center d-flex">
                <div class="left-header align-middle">
                    <p class="my-auto"><i class="far fa-envelope"></i> office@bacco.org.bd</p>
                </div>
                <div class="header-social">
                    <ul class="d-flex align-middle my-auto">
                        <li><a href="https://www.facebook.com/BACCO.BPO" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/bacco-bpo/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC9JGURh4o-l032_G23sHgLg/featured" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8">
                <div class="right-hrader">
                    <ul class="d-flex">
                        <li>
                            <div class="bar">
                                <div class="inner">

                                    <input id="search_input" type="search" class="search-input search-control" onkeyup="searchFunction(this.value)" placeholder="Search">

                                    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                        <i class="fas fa-search"></i>
                                    </button>

                                </div>
                            </div>

                            <div class="content-list" id="list">
                                <ul class="drop-list" id="module_wise_data">


                                </ul>
                            </div>

                        </li>

                        <li><a class="m-menu" href="https://www.bacco.org.bd/member-login">Member Login</a> |</li>
                        <li><a class="m-menu m-menu-active" href="https://www.bacco.org.bd/member-registration">Become a Member</a> |</li>
                        <li><a class="m-menu" href="https://www.bacco.org.bd/faqs">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>