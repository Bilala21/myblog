@extends('../main_layout.layout')
@section('title', 'User Dashboard')
@section('content')
<main class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 posts mb-4">
                <div class="card shadow-sm position-relative">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title fs-6">How read about php</h4>
                        <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id sed dignissimos deleniti?
                            Voluptas, assumenda itaque atque quo ratione consequatur distinctio enim similique, quae
                            repellendus nulla laudantium ullam sint illo maxime.
                        </p>
                        <div class="d-flex justify-content-between">
                            <p class="fs-8">created at:23/04/2022</p>
                            <p class="fs-8">updated at:23/04/2022</p>
                        </div>
                        <h4 class="fs-6 text-end mb-3">Author name</h4>
                        <div class="text-end">
                            <a href="../posts/single-post.html?id=1" class="fs-7 me-2">View post</a>
                            <a href="../posts/edite-post.html?id=1" class="fs-7">Edit post</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
