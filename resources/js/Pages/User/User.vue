<template>
    <section>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">

                        <h5 class="card-title">Block styled form</h5>

                        <!-- Block styled form -->
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="_dm-inputEmail2" class="form-label">Email</label>
                                <input id="_dm-inputEmail2" type="email" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="_dm-inputPassword2" class="form-label">Password</label>
                                <input id="_dm-inputPassword2" type="password" class="form-control">
                            </div>

                            <div class="col-12">
                                <label for="_dm-inputAddress" class="form-label">Address</label>
                                <input id="_dm-inputAddress" type="text" class="form-control" placeholder="1234 Main St">
                            </div>

                            <div class="col-12">
                                <label for="_dm-inputAddress2" class="form-label">Address 2</label>
                                <input id="_dm-inputAddress2" type="text" class="form-control" placeholder="Apartment, studio, or floor">
                            </div>

                            <div class="col-md-6">
                                <label for="_dm-inputCity" class="form-label">City</label>
                                <input id="_dm-inputCity" type="text" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>State 1</option>
                                    <option>State 2</option>
                                    <option>State 3</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="_dm-inputZip" class="form-label">Zip</label>
                                <input id="_dm-inputZip" type="text" class="form-control">
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input id="_dm-gridCheck" class="form-check-input" type="checkbox">
                                    <label for="_dm-gridCheck" class="form-check-label">
                                        Check me out
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                        <!-- END : Block styled form -->

                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">

                        <h5 class="card-title">Horizontal form</h5>

                        <!-- Horizontal Form -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="_dm-inputAddress3" class="col-sm-2 form-label">Address</label>
                                <div class="col-sm-10">
                                    <input id="_dm-inputAddress3" type="text" class="form-control" placeholder="1234 Main St">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="_dm-inputAddress4" class="col-sm-2 col-form-label">Address 2</label>
                                <div class="col-sm-10">
                                    <input id="_dm-inputAddress4" type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="_dm-inputCity2" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input id="_dm-inputCity2" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check">
                                        <input id="_dm-rememberCheck3" class="form-check-input" type="checkbox">
                                        <label for="_dm-rememberCheck3" class="form-check-label">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                        <!-- END : Horizontal Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</template>