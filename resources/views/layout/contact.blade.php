<section id="contact">
    <div class="content-box-md">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h1 class="mb-3">Get In Touch</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <span id="toastr" class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                        </span>
                    @endif

                    <form id="contact-form" method="post" action="{{ route('contacts.store') }}" role="form">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="your-name" class="form-label">Your Name*</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Please Enter Your Name" required>

                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="your-phone" class="form-label">Phone Number*</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Please Enter Your Phone Number">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="your-email" class="form-label">Your Email*</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Please Enter Your Email" required>

                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="your-subject" class="form-label">Your Subject*</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Please Enter Your Subject" required>
                                @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="your-message" class="form-label">Your Message*</label>
                                <textarea class="form-control" id="message" required name="message" rows="5" placeholder="Message for me.."></textarea>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-dark w-100 fw-bold">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
