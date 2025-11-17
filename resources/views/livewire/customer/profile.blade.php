<div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <form action="" class="p-5 border mt-3 rounded shadow-lg">
                <h1 class="text-center mb-3">PROFILE</h1>

                <div class="mb-3">
                    <x-label for="fullname" value="Full Name"/>
                    <x-input type="text" name="fullname" placeholder="Enter Full Name"/>
                </div>

                <div class="mb-3">
                    <x-label for="email" value="Email"/>
                    <x-input type="type" name="email" placeholder="Enter Email" />
                </div>

                <div class="mb-3">
                    <x-label for="address" value="Address"/>
                    <x-input type="type" name="address" placeholder="Enter Address" />
                </div>

                <div class="mb-3">
                    <x-label for="phone" value="Phone"/>
                    <x-input type="type" name="phone" placeholder="Enter Phone" />
                </div>

                <div class="mb-3">
                    <x-label for="password" value="Password"/>
                    <x-input type="password" name="password" placeholder=""/>
                </div>

                <div>
                    <x-button class="w-100">EDIT</x-button>
                </div>
            </form>
        </div>
    </div>
</div>
