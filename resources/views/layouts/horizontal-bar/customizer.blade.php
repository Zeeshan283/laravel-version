<!-- ============ Customizer ============= -->
<div class="customizer open">
    <div class="handle" (click)="isOpen = !isOpen">
        <i class="i-Gear spin"></i>
    </div>
    <div class="customizer-body" data-perfect-scrollbar data-suppress-scroll-x="true">
        <div class="accordion" id="accordionCustomizer">


            <div class="card shadow-none">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0">
                        RTL
                    </p>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" id="rtl-checkbox">
                            <span>Enable RTL</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>

            {{-- dark mode --}}
            <div class="card shadow-none rounded-top">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0">
                        Dark Version
                    </p>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" id="dark-checkbox">
                            <span>Enable Dark Mode</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- ============ End Customizer ============= -->