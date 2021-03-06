package ksn;

sub partial_ksn_2_full {
    my $partial = shift;

    # KSN Index: 9876543210
    #            XXXXXXXXXC
    # Check digit c is needed

    # pad partial into full ksn
    my $unchecked_full = sprintf("%09d0",$partial);

    # sum the digits of each odd digit doubled
    # odds  8,6,4,2,0
    my @odds = (8,6,4,2,0);

    # evens 9,7,5,3,1
    my @evens = (9,7,5,3,1);

    # luhn checksum
    my $checksum = 0;

    for my $x (@odds) {
	my $current_char = substr($unchecked_full,$x,1);

	$checksum += array_sum( digits_of( 2*($current_char) ) );
    }


    for my $x (@evens) {
	my $current_char = substr($unchecked_full,$x,1);

	$checksum += $current_char;
    }


    # determine check digit
    # calculate the amount needed to get to next number ending in zero
    $checkdigit = (10 - ($checksum % 10)) %10 ;

    return sprintf("%09d%d",$partial,$checkdigit);
}

sub full_ksn_2_partial {
    my $full_ksn = shift;
    return 0+substr($full_ksn,0,9);
}

sub array_sum {
    my $s = 0;
    for my $n (@_) {
	$s += $n;
    }
    return $s;
}

sub digits_of {
    my $n_str = shift;

    my @digits;

    for (my $i = 0; $i < (length $n_str); $i++) {
	$digits[$i] = substr($n_str,$i,1);
    }

    return @digits;
}







1;
