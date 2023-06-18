<nav class="navbar navbar-expand-lg bg-body-tertiary navigasi">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="#"><img src="/image/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto menu">
                <li class="nav-item ps-5 pe-5">
                    <a class="nav-link" style="font-weight: bold;" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item ps-5 pe-5">
                    <a class="nav-link" style="font-weight: bold;" href="/ukm">Tentang UKM</a>
                </li>
                <li class="nav-item ps-5 pe-5">
                    <a    class="nav-link" style="font-weight: bold;"href="/pengumuman">Pengumuman</a>
                </li>
                <li class="nav-item ps-5">
                    @auth
                    <a class="nav-link " style="font-weight: bold;" href="/profile">Hi, {{ $nama }}</a>
                    @else
                    <a class="nav-link " style="font-weight: bold;" href="/login">Login</a>
                    @endauth
                    
                </li>
                <li class="nav-item">
                    @auth
                    @if (isset($user->foto))
                    <img height="60px" src="{{asset($user->foto)}}" alt="" style="border-radius: 50%;">

                    @else
                    <img height="60px"style="border-radius: 50%;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIkAiQMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQIDBQYEB//EADMQAAIBAwIEBAIJBQAAAAAAAAABAgMEEQUhEzFBURIiYXEGkRQjMjRSc6Gx0VNicoHw/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AOVAAAAAAAAAAAAAAAAAAAAAACdvUCAAAAAAAAAAAAAAAAAAAAAAFXPBHEQGRrBBnkjFKOAKgAAAeLVr+On2rqPDnLaEe7/gC2oajb2EPFXl5n9mEd2znrn4luqjat4QpR6Z8zNRcV6lxVlVrScpy5tmIDYPWtRbz9Kn8l/B6bb4ivaTXFcK0f7lh/NGmAHcabq9tqHli+HW/py6+3c2B85hOUJKUG4yTymuh2mh6kr+2xUf11Paa7+oGyBVzSI4iAuUqSxsQ6noY22+YAAgDYtZHhyiQBilT7FHsZnJGCcm3sgBxvxLdOvqUqafkorwr36/96HWuTzyOCvH4ruu31qSf6gYQAAAAA9ukXLtr+lLPlk/DL2ex4iU2t0B34KweYRb7INpICQY+LuOJnZAZMoZRVU292TwwPfxCPEeV1HkhzfdgelyiubI8cO55mVk1HmB634GcHrFHgancQ6eNyXs9zr+PjbBpviK140I3NNZlBYmu67gc4CSAAAAF6MHVqwprnKSRQ3GhWfim7ma8sdoerA6DiNLC6FXJsgtGDYFS9KOZFo0e5mUFFbAWbRGUVGwBtIpxFnBhcmyAPR41gwzk2ymfUZQEh7rD3RGUVcwNPqGkeZ1LXGHzp9vY1FSlUpPFSEov1R1reSHFSWGk16oDkCYpyeEm32R08ra1zmVGln1SMlOnSgvqoQX+KQGmsdLqVGpXCcIfh6s3sMQjGMUlFLCS6F6ai+ZlVOIEUt92elY6IxRikS6ij1Ayok8zuEupCudwPQ0RgwSuUU+kgUciPEzJOltkxYwAbyQSQ9kAMFzd0bZfWz3/CuZ4dQ1RQbpWzzLk59vY00pOTcpPLfNsDZ3GsVJNqhBQXd7s8dS8uan2q837PB5wBLk3zbZMZyjvGTXsyoA9dHUbqljFVyXaW5sbfWYSaVaLg+6exowB1ka6lFSjJNPk0yJVWznLW6nbS8u8esWbyjWhWpqcHlP9AMmX3JUmVKykkBdyGTD4yfGBvJYPHXjh5R6M5IcUB4vE10NXq1645o03iT+0109DZ6lXjaW8qmPNyiu7OVnJzk5SeW3lsCoAAAAAAAAAAGe0uJW9TK3i+aMAA6BTUoqUXlPkweDTK2U6Un6xNgBALRg5ci/Bfr8gNimWKIuuQHNa9ccW84cX5ae3++prDPfffa/5kv3MAAAAAAAAAAAAAABejN06kZrnFnT0qKlFSUtmso5Zc0dVYfc6H5cf2Azxpxj0LYXYkkD/9k=" alt="">
                    @endif
                   
                    @endauth
                </li>

            </ul>
        </div>
    </div>
</nav>