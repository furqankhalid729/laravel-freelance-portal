<div class="shop-sidebar-content">
    <div class="shop-close-content">
        <div class="shop-close-content-icon"> <i class="fas fa-times"></i> </div>
        <div class="single-shop-left bg-white radius-10">
            <div class="single-shop-left-filter">
                <div class="single-shop-left-filter-flex flex-between">
                    <div class="single-shop-left-filter-title">
                        <h5 class="title">
                            {{ __('Project Filter') }} </h5>
                    </div>
                    <a href="javascript:void(0)" class="single-shop-left-filter-reset" id="subcategory_project_filter_reset">{{ __('Reset Filter') }}</a>
                </div>
            </div>
        </div>
        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title"> {{ __('Search by Country') }} </h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <x-form.filter-project-job-country :innerTitle="__('Select')" :name="'country'" :id="'country'" />
                    </div>
                </div>
            </div>
        </div>
        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title">{{ __('Experience Level') }}</h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <x-form.experience-level-dropdown :class="'form-control'" :name="'level'" :id="'level'"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title">{{ __('Budget') }}</h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="price-range-input">
                        <div class="price-range-input-flex">
                            <div class="price-range-input-min">
                                <input type="number" placeholder="{{ __('Min') }}" name="min_price" id="min_price">
                            </div>
                            <span class="price-range-separator">-</span>
                            <div class="price-range-input-min">
                                <input type="number" placeholder="{{ __('Max') }}" name="max_price" id="max_price">
                            </div>
                        </div>
                        <div class="price-range-input-btn">
                            <button class="btn-profile btn-outline-1" id="set_price_range"><i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title">{{ __('Project Lengths') }}</h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <select class="form-control" name="delivery_day" id="delivery_day">
                            <option value="">{{ __('Select') }}</option>
                            <option value="1"> {{ __('1 days') }}</option>
                            <option value="2"> {{ __('2 days') }}</option>
                            <option value="3"> {{ __('3 days') }}</option>
                            <option value="4"> {{ __('4 days') }}</option>
                            <option value="5"> {{ __('5 days') }}</option>
                            <option value="6"> {{ __('6 days') }}</option>
                            <option value="7"> {{ __('7 days') }}</option>
                            <option value="10"> {{ __('10 days') }}</option>
                            <option value="15"> {{ __('15 days') }}</option>
                            <option value="20"> {{ __('30 days') }}</option>
                            <option value="60"> {{ __('60 days') }}</option>
                            <option value="90"> {{ __('90 days') }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title">{{ __('Choose Rating') }}</h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <ul class="filter-lists active-list">
                            <li class="list" data-rating="5">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                            </li>
                            <li class="list" data-rating="4">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                            </li>
                            <li class="list" data-rating="3">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                            </li>
                            <li class="list" data-rating="2">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                            </li>
                            <li class="list" data-rating="1">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
