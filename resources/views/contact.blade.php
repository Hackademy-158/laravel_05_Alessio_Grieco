<x-layout>
    <x-slot:title>Musify - Contact</x-slot:title>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <main class="form-signin w-100 m-auto" style="max-width: 330px;">
            <form>
                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 fw-normal">Contact Us</h1>
                    <p>We'd love to hear from you!</p>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea" style="height: 100px"></textarea>
                    <label for="floatingTextarea">Your Message</label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Subscribe to newsletter
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Send Message</button>
                
                <p class="mt-5 mb-3 text-body-secondary text-center">© 2024 Musify</p>
            </form>
        </main>
    </div>
</x-layout>
