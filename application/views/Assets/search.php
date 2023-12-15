        <div class="container-fluid m-0">
            <div class="row">
                <div class="col-lg-10 card-margin">
                    <div class="card search-form">
                        <div class="card-body p-0">
                            <form id="search-form">
                                <div class="row-top">
                                    <div class="col-8">
                                        <div class="row no-gutters">
                                            <div class="col-lg-8 col-md-7 col-sm-6 p-0">
                                                <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-2 p-0">    
                                                <button type="submit" class="btn btn-base">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (empty($Data)) { ?>
                <div class="row">
                    <div class="col-lg-4">
                    <div class="nrf_wrap__sIFNn">
                        <img alt="No result found" loading="lazy" width="163" height="155" decoding="async" data-nimg="1" src="https://filecr.com/_next/image/?url=%2F_next%2Fstatic%2Fmedia%2Fnrf.83630018.png&w=256&q=75" style="color: transparent;">
                        <h3 class="nrf_title__BacFQ">No results found for the keyword "<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>"</h3>
                        <p class="nrf_desc__A7A_1">We didn't find any Software for your search.</p>
                        <a href="https://www.google.com/search?q=<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>" class="btn-primary_dark large" target="_blank" rel="noreferrer">Search Deep</a>
                        </div>
                    </div>
                </div>

            <?php } else { ?>

            <div class="row">
                <div class="col-8">
                    <div class="card card-margin">
                        <div class="card-body">
                            <div class="row search-body">
                                <div class="col-lg-12">
                                    <div class="search-result">
                                        <div class="result-body">
                                            <div class="table-responsive">
                                                <table id="blogsTable"  class="table widget-26">
                                                    <tbody>
                                                    <?php foreach ($Data as $software) { ?>
                                                        <tr>
                                                            <td>
                                                                <div class="widget-26-job-emp-img">
                                                                    <img src="<?php echo $software['logo'] ?>"
                                                                        alt="<?php echo $software['name'] ?>" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="widget-26-job-title">
                                                                    <a href="<?php echo base_url('product/') . urlencode(str_replace(' ', '-', $software['id'])); ?>"><?php echo $software['name'] ?></a>
                                                                    <p class="m-0"><a href="<?php echo base_url('product/') . urlencode(str_replace(' ', '-', $software['id'])); ?>" class="employer-name"><?php echo $software['company'] ?></a></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="widget-26-job-info">
                                                                    <p class="type m-0"><?php echo $software['category'] ?></p>
                                                                    <p style="color: green"><?php echo $software['free'] ?></p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="widget-26-job-category bg-soft-base">
                                                                <span><?php echo $software['relation_name'] ?></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="widget-26-job-starred">
                                                                    <a href="<?php echo base_url('product/') . urlencode(str_replace(' ', '-', $software['id'])); ?>" target="_blank" rel="noopener noreferrer">
                                                                        <svg version="1.1" id="icons_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 128 128" xml:space="preserve"><style>.st0{display:none}.st1{display:inline}.st2{fill:#0a0a0a}</style><g id="row1_1_"><g id="_x31__3_"><path class="st2" d="M64 0C28.7 0 0 28.7 0 64s28.7 64 64 64 64-28.7 64-64S99.3 0 64 0zm0 121.6C32.2 121.6 6.4 95.8 6.4 64S32.2 6.4 64 6.4s57.6 25.8 57.6 57.6-25.8 57.6-57.6 57.6zM49.2 38.4 73.6 64 49.2 89.6h13.5L86.4 64 62.7 38.4H49.2z" id="_x32__2_"/></g></g></svg>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>



        <style>
.row-top{
    justify-content: left;
}
            .row{
                justify-content: center;
            }
            .nrf_wrap__sIFNn {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 12px;
            justify-content: center;
            min-height: 60vh;
            padding: 24px;
        }
            body {
                /* background:#dcdcdc; */
                margin-top: 20px;
            }

            .widget-26 {
                color: #3c4142;
                font-weight: 400;
            }

            .widget-26 tr:first-child td {
                border: 0;
            }

            .widget-26 .widget-26-job-emp-img img {
                width: 35px;
                height: 35px;
                border-radius: 50%;
            }

            .widget-26 .widget-26-job-title {
                min-width: 200px;
            }

            .widget-26 .widget-26-job-title a {
                font-weight: 400;
                font-size: 0.875rem;
                color: #3c4142;
                line-height: 1.5;
            }

            .widget-26 .widget-26-job-title a:hover {
                color: #68CBD7;
                text-decoration: none;
            }

            .widget-26 .widget-26-job-title .employer-name {
                margin: 0;
                line-height: 1.5;
                font-weight: 400;
                color: #3c4142;
                font-size: 0.8125rem;
                color: #3c4142;
            }

            .widget-26 .widget-26-job-title .employer-name:hover {
                color: #68CBD7;
                text-decoration: none;
            }

            .widget-26 .widget-26-job-title .time {
                font-size: 12px;
                font-weight: 400;
            }

            .widget-26 .widget-26-job-info {
                min-width: 100px;
                font-weight: 400;
            }

            .widget-26 .widget-26-job-info p {
                line-height: 1.5;
                color: #3c4142;
                font-size: 0.8125rem;
            }

            .widget-26 .widget-26-job-info .location {
                color: #3c4142;
            }

            .widget-26 .widget-26-job-salary {
                min-width: 70px;
                font-weight: 400;
                color: #3c4142;
                font-size: 0.8125rem;
            }

            .widget-26 .widget-26-job-category {
                padding-top: 0.5rem;
            padding-right: 1.2rem;
            padding-left: 1.2rem;
            padding-bottom: 0.5rem; 
                display: inline-flex;
                white-space: nowrap;
                border-radius: 15px;
            }

            .widget-26 .widget-26-job-category .indicator {
                width: 13px;
                height: 13px;
                margin-right: .5rem;
                float: left;
                border-radius: 50%;
            }

            .widget-26 .widget-26-job-category span {
                font-size: 0.8125rem;
                color: #3c4142;
                font-weight: 600;
            }

            .widget-26 .widget-26-job-starred svg {
                width: 20px;
                height: 20px;
                color: #fd8b2c;
            }

            .widget-26 .widget-26-job-starred svg.starred {
                fill: #fd8b2c;
            }

            .bg-soft-base {
                background-color: #e1f5f7;
            }

            .bg-soft-warning {
                background-color: #fff4e1;
            }

            .bg-soft-success {
                background-color: #d1f6f2;
            }

            .bg-soft-danger {
                background-color: #fedce0;
            }

            .bg-soft-info {
                background-color: #d7efff;
            }


            .search-form {
                width: 80%;
                margin: 0 auto;
                margin-top: 1rem;
            }

            .search-form input {
                height: 100%;
                background: transparent;
                border: 0;
                display: block;
                width: 100%;
                padding: 1rem;
                height: 100%;
                font-size: 1rem;
            }

            .search-form select {
                background: transparent;
                border: 0;
                padding: 1rem;
                height: 100%;
                font-size: 1rem;
            }

            .search-form select:focus {
                border: 0;
            }

            .search-form button {
                height: 100%;
                width: 100%;
                font-size: 1rem;
            }

            .search-form button svg {
                width: 24px;
                height: 24px;
            }

            .search-body {
                margin-bottom: 1.5rem;
            }

            .search-body .search-filters .filter-list {
                margin-bottom: 1.3rem;
            }

            .search-body .search-filters .filter-list .title {
                color: #3c4142;
                margin-bottom: 1rem;
            }

            .search-body .search-filters .filter-list .filter-text {
                color: #727686;
            }

            .search-body .search-result .result-header {
                margin-bottom: 2rem;
            }

            .search-body .search-result .result-header .records {
                color: #3c4142;
            }

            .search-body .search-result .result-header .result-actions {
                text-align: right;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .search-body .search-result .result-header .result-actions .result-sorting {
                display: flex;
                align-items: center;
            }

            .search-body .search-result .result-header .result-actions .result-sorting span {
                flex-shrink: 0;
                font-size: 0.8125rem;
            }

            .search-body .search-result .result-header .result-actions .result-sorting select {
                color: #68CBD7;
            }

            .search-body .search-result .result-header .result-actions .result-sorting select option {
                color: #3c4142;
            }

            @media (min-width: 768px) and (max-width: 991.98px) {
                .search-body .search-filters {
                    display: flex;
                }

                .search-body .search-filters .filter-list {
                    margin-right: 1rem;
                }
            }

            .card-margin {
                margin-bottom: 1.875rem;
            }

            @media (min-width: 992px) {
                .col-lg-2 {
                    flex: 0 0 16.66667%;
                    max-width: 16.66667%;
                }
            }

            .card {
                border: 0;
                box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
                -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
                -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
                -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
            }

            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #ffffff;
                background-clip: border-box;
                border: 1px solid #e6e4e9;
                border-radius: 8px;
            }
        </style>