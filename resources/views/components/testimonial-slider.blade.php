<!-- Testimonial -->
<section class="testimonial mask-overlay">
    <div class="theme-container container">               
        <div class="testimonial-slider no-pagination pad-120">
            @php
                // Gender-specific names and avatar parameters
                $maleNames = ['Alex', 'Jordan', 'Casey', 'Chris', 'Sam'];
                $femaleNames = ['Morgan', 'Taylor', 'Riley', 'Jamie', 'Dakota'];
                $roles = ['Happy Customer', 'Satisfied Client', 'Verified User', 'VIP Member'];
                
                // Positive review templates
                $reviews = [
                    "This website exceeded all my expectations! The interface is intuitive and the service is lightning-fast. %s definitely found a lifelong customer here!",
                    "I'm blown away by the quality of service. %s made everything so simple and efficient. 10/10 would recommend to anyone!",
                    "Finally a platform that actually delivers what it promises! %s's support team resolved my issue in minutes. Truly impressive!",
                    "The best online experience I've had in years. %s keeps surprising me with new features and seamless functionality!",
                    "Quick, reliable, and professional service. %s has completely transformed how I handle my daily tasks. Thank you!",
                    "I was skeptical at first, but %s proved me wrong. The attention to detail and user experience is unmatched!",
                    "Outstanding performance across the board! %s's platform is a game-changer in every sense of the word.",
                    "Five stars isn't enough! From start to finish, %s provides a premium experience that keeps me coming back.",
                    "Innovative solutions and constant improvements. %s continues to set the standard in online services!",
                    "I've tried countless alternatives, but nothing comes close. %s offers the perfect balance of power and simplicity."
                ];
                
                // Create 10 unique random entries
                $people = array_merge(
                    array_map(fn($name) => ['name' => $name, 'gender' => 'male'], $maleNames),
                    array_map(fn($name) => ['name' => $name, 'gender' => 'female'], $femaleNames)
                );
                shuffle($people);
                $selectedPeople = array_slice($people, 0, 10);
            @endphp
            
            @foreach($selectedPeople as $person)
            <div class="item">
                <div class="testimonial-img darkclr-border theme-clr font-2">
                    <img alt="User" src="https://i.pravatar.cc/150?u={{ $person['name'] }}&g={{ $person['gender'] }}" />
                    <span>,,</span>
                </div>
                <div class="testimonial-content">
                    <p><i class="gray-clr fs-16">
                        "{{ sprintf($reviews[array_rand($reviews)], $person['name']) }}"
                    </i></p>
                    <h2 class="title-2 pt-10">
                        <a href="#" class="white-clr fw-900">{{ $person['name'] }}</a>
                        <span class="gray-clr fs-14 d-block mt-2">{{ $roles[array_rand($roles)] }}</span>
                    </h2>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /.Testimonial -->