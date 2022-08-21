@extends('layouts.app')

@section('content')
    <div class="hero-banner bg-white d-flex flex-column justify-content-around">
        <div class="container-xl">
            <div class="d-flex flex-column justify-content-center">
                <div class="hero-banner__content">
                    <p class="fs-24 fw-700 text-uppercase mb-0" style="color: #bababa;">Beyond WordPress Hosting</p>
                    <h1 class="fs-64 fw-800 lh-1 mb-0">Power your creativity <br>on the #1 platform <br>for WordPress</h1>
                </div>
                <img src="@asset('hand-drawn-flat.webp')" class="position-absolute end-0" width="640" alt="" />
            </div>

        </div>
    </div>
    <section class="pt-5">
        <div class="container-xl">
            <div class="row">
                @repeat(4)
                <div class="col-md-3">
                    <div class="card lh-sm border-0 rounded-0">
                        <div class="card-body">
                            <h5 class="card-title fs-32 fw-800 lh-base mb-4">Start</h5>
                            <div class="mb-2 mb-sm-3">
                                <div class="fs-24 fw-800">15 GB</div>
                                <div class="fs-12 text-gull-gray">SSD Storage</div>
                            </div>
                            <div class="mb-2 mb-sm-3">
                                <div class="fs-24 fw-800">1</div>
                                <div class="fs-12 text-gull-gray">Website</div>
                            </div>
                            <div class="mb-4 mb-sm-4">
                                <div class="fs-24 fw-800">∞</div>
                                <div class="fs-12 text-gull-gray">FTP, Database, Email Accounts</div>
                            </div>
                            <div class="mb-4 mb-sm-5">
                                <div>
                                    <span class="fs-32 fw-800">$3.59</span>
                                    <span class="fs-16">/mo</span>
                                </div>
                                <div class="fs-12 text-gull-gray">Regular Price <s>$11.95/mo</s></div>
                            </div>
                            <div class="mb-4">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-sm btn-primary rounded-0" style="--bs-btn-focus-box-shadow: none;">
                                        <span class="fs-12 text-uppercase">{{ __('Try for free', 'exohost') }}</span>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-2 d-inline-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-shield me-1" viewBox="0 0 16 16">
                                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                </svg>
                                <a href="#free-ssl" class="fs-14 text-decoration-none">{{ __('Free SSL Certificate', 'exohost') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endrepeat
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container-xl">
            <h3 class="fs-32 fw-700 mb-3">With each tariff:</h3>
            <div class="host-tariff-attributes row">
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-terminal me-3" viewBox="0 0 16 16">
                        <path d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z"/>
                        <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z"/>
                    </svg>
                    <span class="fs-20 fw-600">SSH, SFTP/FTP access</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stoplights me-3" viewBox="0 0 16 16">
                        <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm1.5 2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        <path d="M4 2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1c-1.2-.4-1.833-1.5-2-2h2V8c-1.2-.4-1.833-1.5-2-2h2V4c-1.2-.4-1.833-1.5-2-2h2zm2-1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6z"/>
                    </svg>
                    <span class="fs-20 fw-600">Unlimited Traffic</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wordpress me-3" viewBox="0 0 16 16">
                        <path d="M12.633 7.653c0-.848-.305-1.435-.566-1.892l-.08-.13c-.317-.51-.594-.958-.594-1.48 0-.63.478-1.218 1.152-1.218.02 0 .039.002.058.003l.031.003A6.838 6.838 0 0 0 8 1.137 6.855 6.855 0 0 0 2.266 4.23c.16.005.313.009.442.009.717 0 1.828-.087 1.828-.087.37-.022.414.521.044.565 0 0-.371.044-.785.065l2.5 7.434 1.5-4.506-1.07-2.929c-.369-.022-.719-.065-.719-.065-.37-.022-.326-.588.043-.566 0 0 1.134.087 1.808.087.718 0 1.83-.087 1.83-.087.37-.022.413.522.043.566 0 0-.372.043-.785.065l2.48 7.377.684-2.287.054-.173c.27-.86.469-1.495.469-2.046zM1.137 8a6.864 6.864 0 0 0 3.868 6.176L1.73 5.206A6.837 6.837 0 0 0 1.137 8z"/>
                        <path d="M6.061 14.583 8.121 8.6l2.109 5.78c.014.033.03.064.049.094a6.854 6.854 0 0 1-4.218.109zm7.96-9.876c.03.219.047.453.047.706 0 .696-.13 1.479-.522 2.458l-2.096 6.06a6.86 6.86 0 0 0 2.572-9.224z"/>
                        <path fill-rule="evenodd" d="M0 8c0-4.411 3.589-8 8-8 4.41 0 8 3.589 8 8s-3.59 8-8 8c-4.411 0-8-3.589-8-8zm.367 0c0 4.209 3.424 7.633 7.633 7.633 4.208 0 7.632-3.424 7.632-7.633C15.632 3.79 12.208.367 8 .367 3.79.367.367 3.79.367 8z"/>
                    </svg>
                    <span class="fs-20 fw-600">WordPress Toolkit</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-globe2 me-3" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                    </svg>
                    <span class="fs-20 fw-600">Free Site Publisher</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-open me-3" viewBox="0 0 16 16">
                        <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
                    </svg>
                    <span class="fs-20 fw-600">Mail Server</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer2 me-3" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                    </svg>
                    <span class="fs-20 fw-600">Site Profiler</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bug me-3" viewBox="0 0 16 16">
                        <path d="M4.355.522a.5.5 0 0 1 .623.333l.291.956A4.979 4.979 0 0 1 8 1c1.007 0 1.946.298 2.731.811l.29-.956a.5.5 0 1 1 .957.29l-.41 1.352A4.985 4.985 0 0 1 13 6h.5a.5.5 0 0 0 .5-.5V5a.5.5 0 0 1 1 0v.5A1.5 1.5 0 0 1 13.5 7H13v1h1.5a.5.5 0 0 1 0 1H13v1h.5a1.5 1.5 0 0 1 1.5 1.5v.5a.5.5 0 1 1-1 0v-.5a.5.5 0 0 0-.5-.5H13a5 5 0 0 1-10 0h-.5a.5.5 0 0 0-.5.5v.5a.5.5 0 1 1-1 0v-.5A1.5 1.5 0 0 1 2.5 10H3V9H1.5a.5.5 0 0 1 0-1H3V7h-.5A1.5 1.5 0 0 1 1 5.5V5a.5.5 0 0 1 1 0v.5a.5.5 0 0 0 .5.5H3c0-1.364.547-2.601 1.432-3.503l-.41-1.352a.5.5 0 0 1 .333-.623zM4 7v4a4 4 0 0 0 3.5 3.97V7H4zm4.5 0v7.97A4 4 0 0 0 12 11V7H8.5zM12 6a3.989 3.989 0 0 0-1.334-2.982A3.983 3.983 0 0 0 8 2a3.983 3.983 0 0 0-2.667 1.018A3.989 3.989 0 0 0 4 6h8z"/>
                    </svg>
                    <span class="fs-20 fw-600">Virus Protection</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stopwatch me-3" viewBox="0 0 16 16">
                        <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
                        <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
                    </svg>
                    <span class="fs-20 fw-600">CronTab (scheduled tasks)</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github me-3" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                    <span class="fs-20 fw-600">Git™ Version Control</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-archive me-3" viewBox="0 0 16 16">
                        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <span class="fs-20 fw-600">Backup</span>
                </div>
                <div class="col-4 d-flex align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" class="me-3" viewBox="0 0 640 512">
                        <path d="M210.3 220.2c-5.6-24.8-26.9-41.2-51-41.2h-37c-7.1 0-12.5 4.5-14.3 10.9L73.1 320l24.7-.1c6.8 0 12.3-4.5 14.2-10.7l25.8-95.7h19.8c8.4 0 16.2 5.6 18.3 14.8 2.5 10.9-5.9 22.6-18.3 22.6h-10.3c-7 0-12.5 4.6-14.3 10.8l-6.4 23.8h32c37.2 0 58.3-36.2 51.7-65.3zm-156.5 28h18.6c6.9 0 12.4-4.4 14.3-10.9l6.2-23.6h-40C30 213.7 9 227.8 1.7 254.8-7 288.6 18.5 320 52 320h12.4l7.1-26.1c1.2-4.4-2.2-8.3-6.4-8.3H53.8c-24.7 0-24.9-37.4 0-37.4zm247.5-34.8h-77.9l-3.5 13.4c-2.4 9.6 4.5 18.5 14.2 18.5h57.5c4 0 2.4 4.3 2.1 5.3l-8.6 31.8c-.4 1.4-.9 5.3-5.5 5.3h-34.9c-5.3 0-5.3-7.9 0-7.9h21.6c6.8 0 12.3-4.6 14.2-10.8l3.5-13.2h-48.4c-39.2 0-43.6 63.8-.7 63.8l57.5.2c11.2 0 20.6-7.2 23.4-17.8l14-51.8c4.8-19.2-9.7-36.8-28.5-36.8zM633.1 179h-18.9c-4.9 0-9.2 3.2-10.4 7.9L568.2 320c20.7 0 39.8-13.8 44.9-34.5l26.5-98.2c1.2-4.3-2-8.3-6.5-8.3zm-236.3 34.7v.1h-48.3l-26.2 98c-1.2 4.4 2.2 8.3 6.4 8.3h18.9c4.8 0 9.2-3 10.4-7.8l17.2-64H395c12.5 0 21.4 11.8 18.1 23.4l-10.6 40c-1.2 4.3 1.9 8.3 6.4 8.3H428c4.6 0 9.1-2.9 10.3-7.8l8.8-33.1c9-33.1-15.9-65.4-50.3-65.4zm98.3 74.6c-3.6 0-6-3.4-5.1-6.7l8-30c.9-3.9 3.7-6 7.8-6h32.9c2.6 0 4.6 2.4 3.9 5.1l-.7 2.6c-.6 2-1.9 3-3.9 3h-21.6c-7 0-12.6 4.6-14.2 10.8l-3.5 13h53.4c10.5 0 20.3-6.6 23.2-17.6l3.2-12c4.9-19.1-9.3-36.8-28.3-36.8h-47.3c-17.9 0-33.8 12-38.6 29.6l-10.8 40c-5 17.7 8.3 36.7 28.3 36.7h66.7c6.8 0 12.3-4.5 14.2-10.7l5.7-21z"/>
                    </svg>
                    <span class="fs-20 fw-600">Hosting Control Panel</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5 mt-5">
        <div class="container-xl">
            <div class="section-heading text-center">
                <h3 class="fs-48 fw-700">
                    Choose the best WordPress hosting <br>solution for your business
                </h3>
                <p class="fs-24 fw-200">Improve performance of your WordPress website, protect your business, <br>and accelerate development, all backed by award-winning</p>
            </div>
        </div>
    </section>

    <section class="tab-section">
        <div class="tab-header bg-white sticky-top">
            <div class="container-xl">
                <ul id="pag-nav-menu" class="nav nav-tabs nav-tabs-lg flex-nowrap">
                    <li class="nav-item flex-shrink-1 w-100">
                        <a class="nav-link text-center active" aria-current="page" href="#WordPressHosting">
                            WordPress Hosting
                        </a>
                    </li>
                    <li class="nav-item flex-shrink-1 w-100">
                        <a class="nav-link text-center" aria-current="page" href="#EnterpriseWordPress">
                            Enterprise WordPress
                        </a>
                    </li>
                    <li class="nav-item flex-shrink-1 w-100">
                        <a class="nav-link text-center" aria-current="page" href="#WordPressECommerce">
                            WordPress eCommerce
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-xl">
            <div data-bs-spy="scroll" class="py-5" data-bs-target="#pag-nav-menu" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
                <div id="WordPressHosting" class="row g-0">
                    <div class="col-md-5 pe-5">
                        <div class="h-100 d-flex flex-column justify-content-center mx-4">
                            <div class="mb-4">
                                <h6 class="fs-18 fw-800 text-mid-gray text-uppercase border-top border-5 pt-2 mw-fit">
                                    Foundation
                                </h6>
                                <h3 class="fs-40 fw-800">
                                    WordPress hosting for fast & secure business websites
                                </h3>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-outline-dark btn-lg rounded-0 py-3" type="button">
                                    <span class="text-uppercase fs-16 fw-700">Explore Foundation</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="me-4">
                            <img src="@asset('cp-dashboard-top2.png')" class="img-fluid" width="627" alt="WordPress Hosting" />
                        </div>
                    </div>
                </div>
                <div id="EnterpriseWordPress" class="row g-0 pt-100">
                    <div class="col-md-7">

                    </div>
                    <div class="col-md-5">
                        <div class="h-100 d-flex flex-column justify-content-center mx-4">
                            <div class="mb-4">
                                <h6 class="fs-18 fw-800 text-mid-gray text-uppercase border-top border-5 pt-2 mw-fit">
                                    Premier
                                </h6>
                                <h3 class="fs-40 fw-800">
                                    Enterprise WordPress Platform
                                </h3>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-outline-dark btn-lg rounded-0 py-3" type="button">
                                    <span class="text-uppercase fs-16 fw-700">Explore Foundation</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="WordPressECommerce" class="row g-0 pt-100">
                    <div class="col-md-5">
                        <div class="mx-4">
                            <h6 class="fs-20 fw-800 text-mid-gray">Premier</h6>
                            <h3 class="fs-40 fw-800">
                                Enterprise WordPress Platform
                            </h3>
                        </div>

                        <div class="d-grid m-4">
                            <button class="btn btn-outline-dark btn-lg rounded-0 py-3" type="button">
                                <span class="text-uppercase fs-16 fw-700">Explore Foundation</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection