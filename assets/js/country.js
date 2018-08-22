baseurl = $("#baseurl").val();
$('#country_id').on('change', function () {
            country_id = $(this).val();
            // baseurl = $("#baseurl").val();

            if (country_id != '') {
                $.ajax({
                    type: 'POST',
                    data: {country_id: country_id},
                    url: baseurl+'master/Location/get_states_by_country_id/' + country_id,
                    success: function (data) {
                        result = JSON.parse(data);
                        if (result != null && result.length > 0) {
                            option_text = '<option value="">Select State</option>';
                            $.each(result, function (key, value) {
                                option_text += '<option value="' + value.id + '">' + value.state_name + '</option>';
                            });
                            $('#state_id').html(option_text);
                            $('#state_id').removeAttr('disabled');
                            $('#state_id').addClass('required');
                        } else {
                            $('#state_id, #city_id').html('');
                            $('#state_id, #city_id').attr('disabled', 'disabled');
                            $('#state_id, #city_id').removeClass('required');
                        }
                    }
                });
            } else {
                $('#state_id, #city_id').html('');
                $('#state_id, #city_id').attr('disabled', 'disabled');
                $('#state_id, #city_id').removeClass('required');
            }
        });

        $('#state_id').on('change', function () {
            state_id = $(this).val();
            if (state_id != '') {
                $.ajax({
                    type: 'POST',
                    data: {state_id: state_id},
                    url: baseurl+'master/Location/get_cities_by_state_id/' + state_id,
                    success: function (data) {
                        result = JSON.parse(data);
                        if (result != null && result.length > 0) {
                            option_text = '<option value="">Select City</option>';
                            $.each(result, function (key, value) {
                                option_text += '<option value="' + value.id + '">' + value.city_name + '</option>';
                            });
                            $('#city_id').html(option_text);
                            $('#city_id').removeAttr('disabled');
                            $('#city_id').addClass('required');
                        } else {
                            $('#city_id').html('');
                            $('#city_id').attr('disabled', 'disabled');
                            $('#city_id').removeClass('required');
                        }
                    }
                });
            } else {
                $('#city_id').html('');
                $('#city_id').attr('disabled', 'disabled');
                $('#city_id').removeClass('required');
            }
        
 
        });


        $('.country_id').on('change', function () {
            country_id = $(this).val();
            // baseurl = $("#baseurl").val();

            if (country_id != '') {
                $.ajax({
                    type: 'POST',
                    data: {country_id: country_id},
                    url: baseurl+'master/Location/get_states_by_country_id/' + country_id,
                    success: function (data) {
                        result = JSON.parse(data);
                        if (result != null && result.length > 0) {
                            option_text = '<option value="">Select State</option>';
                            $.each(result, function (key, value) {
                                option_text += '<option value="' + value.id + '">' + value.state_name + '</option>';
                            });
                            $('.state_id').html(option_text);
                            $('.state_id').removeAttr('disabled');
                            $('.state_id').addClass('required');
                        } else {
                            $('.state_id, .city_id').html('');
                            $('.state_id, .city_id').attr('disabled', 'disabled');
                            $('.state_id, .city_id').removeClass('required');
                        }
                    }
                });
            } else {
                $('.state_id, .city_id').html('');
                $('.state_id, .city_id').attr('disabled', 'disabled');
                $('.state_id, .city_id').removeClass('required');
            }
        });

        $('.state_id').on('change', function () {
            state_id = $(this).val();
            if (state_id != '') {
                $.ajax({
                    type: 'POST',
                    data: {state_id: state_id},
                    url: baseurl+'master/Location/get_cities_by_state_id/' + state_id,
                    success: function (data) {
                        result = JSON.parse(data);
                        if (result != null && result.length > 0) {
                            option_text = '<option value="">Select City</option>';
                            $.each(result, function (key, value) {
                                option_text += '<option value="' + value.id + '">' + value.city_name + '</option>';
                            });
                            $('.city_id').html(option_text);
                            $('.city_id').removeAttr('disabled');
                            $('.city_id').addClass('required');
                        } else {
                            $('.city_id').html('');
                            $('.city_id').attr('disabled', 'disabled');
                            $('.city_id').removeClass('required');
                        }
                    }
                });
            } else {
                $('.city_id').html('');
                $('.city_id').attr('disabled', 'disabled');
                $('.city_id').removeClass('required');
            }
        });