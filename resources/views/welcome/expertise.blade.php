<div class="expertise">
    <div class="container text-center">
        <div class="head mb-5">
            <h4 class="fs-5">{{ \App\Models\Setting::where('name', 'expertise_title')->first()->value ?? 'OUR EXPERTISE' }}</h4>
            <h2 class="fw-bold">{{ \App\Models\Setting::where('name', 'expertise_main_title')->first()->value ?? 'Effortless House Cleaning at Your Doorstep' }}</h2>
            <p class="mt-3">{{ \App\Models\Setting::where('name', 'expertise_description')->first()->value ?? 'We offer professional and customized cleaning solutions to keep your home spotless. Our team ensures every corner sparkles!' }}</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 text-center h-100">
                    <i class="bi bi-stars mb-1"></i>
                    <div class="card-body d-flex flex-column p-0">
                        <h2 class="fw-bold fs-5 my-0 px-3">{{ \App\Models\Setting::where('name', 'expertise_card1_title')->first()->value ?? 'Deep Cleaning' }}</h2>
                        <p class="mt-0 mb-0 px-3 text-center mt-1">{{ \App\Models\Setting::where('name', 'expertise_card1_text')->first()->value ?? 'Thorough cleaning for all rooms, carpets, windows, and upholstery to make your home shine inside and out.' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 text-center h-100">
                    <i class="bi bi-speedometer2 mb-1"></i>
                    <div class="card-body d-flex flex-column p-0">
                        <h2 class="fw-bold fs-5 my-0 px-3">{{ \App\Models\Setting::where('name', 'expertise_card2_title')->first()->value ?? 'Quick Clean-Ups' }}</h2>
                        <p class="mt-0 mb-0 px-3 text-center mt-1">{{ \App\Models\Setting::where('name', 'expertise_card2_text')->first()->value ?? 'Perfect for daily maintenance with a focus on high-traffic areas, keeping everything fresh and organized.' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 text-center h-100">
                    <i class="bi bi-water mb-1"></i>
                    <div class="card-body d-flex flex-column p-0">
                        <h2 class="fw-bold fs-5 my-0 px-3">{{ \App\Models\Setting::where('name', 'expertise_card3_title')->first()->value ?? 'Eco-Friendly Cleaning' }}</h2>
                        <p class="mt-0 mb-0 px-3 text-center mt-1">{{ \App\Models\Setting::where('name', 'expertise_card3_text')->first()->value ?? 'We use environmentally safe products to ensure a cleaner home and a safer planet.' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 text-center h-100">
                    <i class="bi bi-house-door-fill mb-1"></i>
                    <div class="card-body d-flex flex-column p-0">
                        <h2 class="fw-bold fs-5 my-0 px-3">{{ \App\Models\Setting::where('name', 'expertise_card4_title')->first()->value ?? 'Move-In & Out Cleaning' }}</h2>
                        <p class="mt-0 mb-0 px-3 text-center mt-1">{{ \App\Models\Setting::where('name', 'expertise_card4_text')->first()->value ?? 'Preparing your home for its next chapter or tidying up after a move, we handle it all with care.' }}</p>
                    </div>
                </div>
            </div>
        </div>                  
    </div>
</div>