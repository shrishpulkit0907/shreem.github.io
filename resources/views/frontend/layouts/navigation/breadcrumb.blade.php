<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Main</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ ucwords(str_replace('-', ' ', last(request()->segments()))) }}</li>
        </ol>
    </nav>
</div>
