<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pro web</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans container p-2 bg-slate-100 mx-auto flex flex-col min-h-screen">
    <header class="flex-shrink-0 whitespace-nowrap bg-slate-100 flex items-center">
        <div class="w-100 h-100">
            <a href="{{ route('home') }}">
                <svg width="150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="507 341.5 438 251.247">
                    <path class="cls-lightgrey"
                        d=" M 623.8 560.641 L 623.8 568.971 L 621.34 568.971 L 621.34 572.603 L 623.8 572.603 L 623.8 592.11 L 627.833 592.11 L 627.833 572.603 L 632.034 572.603 L 632.034 568.971 L 627.833 568.971 L 627.833 560.646 L 623.8 560.641 Z "
                        fill="rgb(162,162,162)"></path>
                    <path class="cls-lightgrey"
                        d=" M 656.039 580.529 C 656.13 585.147 659.931 588.825 664.549 588.765 C 669.168 588.704 672.871 584.927 672.841 580.309 C 672.812 575.69 669.06 571.962 664.441 571.961 C 662.173 571.924 659.989 572.821 658.4 574.441 C 656.812 576.06 655.958 578.261 656.039 580.529 Z  M 652.029 580.578 C 651.93 575.538 654.891 570.94 659.519 568.943 C 664.147 566.946 669.523 567.948 673.122 571.477 C 676.72 575.007 677.826 580.363 675.919 585.029 C 674.012 589.695 669.472 592.743 664.432 592.742 C 661.173 592.777 658.034 591.514 655.707 589.232 C 653.381 586.95 652.057 583.837 652.029 580.578 Z "
                        fill="rgb(162,162,162)"></path>
                    <path class="cls-lightgrey"
                        d=" M 704.559 581.854 C 704.559 585.743 705.026 589.09 709.895 589.09 C 714.763 589.09 715.214 585.743 715.214 581.854 L 715.214 568.962 L 719.221 568.962 L 719.221 582.298 C 719.221 588.45 716.871 592.721 709.885 592.721 C 702.9 592.721 700.533 588.45 700.533 582.298 L 700.533 568.962 L 704.55 568.962 L 704.559 581.854 Z "
                        fill="rgb(162,162,162)"></path>
                    <path class="cls-lightgrey"
                        d=" M 748.869 571.473 L 748.965 571.473 C 750.02 569.562 752.017 568.362 754.2 568.327 C 755.477 568.363 756.721 568.734 757.808 569.405 L 755.899 572.995 C 755.229 572.388 754.375 572.024 753.474 571.961 C 749.063 571.961 748.869 577.525 748.869 580.529 L 748.869 592.091 L 744.841 592.091 L 744.841 568.964 L 748.869 568.964 L 748.869 571.473 Z "
                        fill="rgb(162,162,162)"></path>
                    <path class="cls-lightgrey"
                        d=" M 785.108 592.1 L 781.101 592.1 L 781.101 568.976 L 785.108 568.976 L 785.108 592.1 Z  M 785.974 560.256 C 785.974 561.84 784.69 563.125 783.106 563.125 C 781.522 563.125 780.237 561.84 780.237 560.256 C 780.237 558.672 781.522 557.388 783.106 557.388 C 784.69 557.388 785.974 558.672 785.974 560.256 Z "
                        fill="rgb(162,162,162)"></path>
                    <path class="cls-lightgrey"
                        d=" M 821.527 574.327 C 820.996 572.99 819.748 572.074 818.313 571.966 C 816.828 571.929 815.564 573.039 815.408 574.517 C 815.408 576.645 818.12 577.434 820.881 578.564 C 823.642 579.693 826.361 581.32 826.361 585.204 C 826.327 587.271 825.46 589.237 823.957 590.656 C 822.453 592.075 820.44 592.826 818.374 592.74 C 814.601 592.863 811.202 590.475 810.037 586.884 L 813.601 585.407 C 814.609 587.568 815.758 589.09 818.432 589.09 C 819.412 589.157 820.376 588.815 821.094 588.145 C 821.813 587.476 822.221 586.538 822.223 585.556 C 822.223 580.382 811.587 582.144 811.587 574.869 C 811.617 573.055 812.385 571.332 813.713 570.096 C 815.041 568.86 816.815 568.218 818.626 568.318 C 821.369 568.419 823.809 570.089 824.897 572.61 L 821.527 574.327 Z "
                        fill="rgb(162,162,162)"></path>
                    <path class="cls-lightgrey"
                        d=" M 854.541 571.473 L 854.637 571.473 C 855.853 569.515 857.994 568.326 860.299 568.327 C 863.026 568.278 865.554 569.754 866.85 572.155 C 868.324 569.679 871.036 568.209 873.915 568.327 C 879.948 568.327 881.458 573.137 881.458 578.017 L 881.458 592.091 L 877.437 592.091 L 877.437 578.662 C 877.437 575.66 877.236 571.961 873.107 571.961 C 868.503 571.961 868.001 576.351 868.001 579.829 L 868.001 592.089 L 863.979 592.089 L 863.979 578.953 C 863.979 576.104 863.622 571.952 859.746 571.952 C 855.047 571.952 854.541 576.631 854.541 580.12 L 854.541 592.077 L 850.508 592.077 L 850.508 568.964 L 854.541 568.964 L 854.541 571.473 Z "
                        fill="rgb(162,162,162)"></path>
                    <path class="cls-lightgrey"
                        d=" M 923.896 578.017 C 923.362 574.585 920.436 572.034 916.962 571.973 C 913.434 572.02 910.428 574.549 909.778 578.017 L 923.896 578.017 Z  M 909.575 581.369 C 909.533 583.434 910.337 585.427 911.8 586.885 C 913.263 588.344 915.259 589.141 917.324 589.092 C 920.435 589.016 923.225 587.159 924.496 584.319 L 927.927 586.238 C 925.829 590.311 921.594 592.833 917.014 592.74 C 913.865 592.813 910.829 591.568 908.638 589.306 C 906.447 587.044 905.301 583.97 905.475 580.825 C 905.475 573.977 909.529 568.315 916.911 568.315 C 924.489 568.315 928.52 574.468 928.114 581.369 L 909.575 581.369 Z "
                        fill="rgb(162,162,162)"></path>
                    <path class="cls-grey"
                        d=" M 675.863 445.958 C 675.877 445.958 675.863 445.869 675.826 445.788 C 675.84 445.846 675.852 445.911 675.863 445.958 Z  M 898.025 353.244 C 891.06 358.191 885.014 364.317 880.161 371.347 C 876.185 375.177 872.907 379.671 870.475 384.627 C 869.151 387.997 869.838 389.857 872.559 389.281 C 867.597 393.391 865.506 392.975 863.445 393.104 C 861.477 393.178 859.368 393.402 855.12 397.578 C 855.12 397.578 855.409 395.998 855.82 394.341 C 856.231 392.683 856.683 390.952 856.683 390.952 C 854.716 391.528 852.632 391.885 850.057 392.695 C 848.503 393.246 848.071 393.162 847.219 393.496 C 846.434 393.794 845.713 394.24 845.095 394.81 C 845.095 394.81 844.806 396.352 844.475 397.816 C 844.136 399.314 843.774 400.817 843.774 400.817 C 842.549 400.754 841.32 400.846 840.117 401.093 C 839.102 401.256 838.114 401.56 837.181 401.994 C 836.305 402.419 835.469 402.923 834.684 403.499 C 833.902 403.998 833.122 404.559 832.35 405.133 C 831.577 405.707 830.77 406.36 829.932 406.923 C 829.076 407.424 828.186 407.866 827.269 408.244 C 825.221 409.144 822.926 409.317 820.766 408.734 C 824.006 410.134 823.504 410.884 822.064 411.78 C 821.364 412.226 820.456 412.762 819.77 413.306 C 819.038 413.748 818.668 414.606 818.85 415.442 C 817.569 414.453 816.14 413.671 814.616 413.124 C 814.465 412.559 814.29 412.009 814.096 411.49 C 813.412 409.894 812.756 408.361 812.128 406.904 C 811.543 405.657 811.117 404.341 810.859 402.988 C 810.726 401.924 810.918 400.845 811.41 399.893 L 814.143 395.015 L 803.64 395.302 C 802.615 395.318 801.598 395.122 800.652 394.726 L 798.615 398.301 C 796.939 400.679 794.389 402.296 791.524 402.799 C 790.803 402.955 790.052 403.1 789.319 403.219 C 787.062 401.884 784.854 400.593 782.784 399.38 C 782.662 402.146 782.765 404.918 783.092 407.667 C 781.563 409.008 779.798 410.054 777.887 410.751 C 775.695 411.596 773.313 411.819 771.002 411.395 C 768.581 412.061 766.246 413.007 764.044 414.214 C 762.878 414.84 761.727 415.561 760.588 416.315 C 759.421 417.036 758.24 417.766 757.066 418.558 C 754.716 420.142 752.361 421.942 749.926 423.398 C 747.607 424.984 745.182 426.41 742.668 427.665 C 732.188 426.498 737.68 433.341 727.84 435.796 C 726.055 435.419 724.234 435.239 722.409 435.259 C 721.613 435.245 720.806 435.283 719.973 435.32 C 718.746 435.406 717.514 435.394 716.29 435.283 C 712.25 434.949 708.429 434.62 706.996 432.174 C 708.828 432.561 710.73 432.437 712.497 431.817 C 713.936 431.315 715.329 430.69 716.661 429.95 C 717.957 429.262 719.303 428.672 720.687 428.185 C 722.406 427.716 724.215 427.688 725.947 428.103 C 725.138 427.476 725.632 427.02 726.687 426.626 C 727.742 426.232 729.357 425.692 730.823 425.212 C 733.769 424.215 735.99 423.146 732.296 421.622 C 724.827 425.412 715.627 424.904 707.215 422.964 L 704.046 422.187 L 702.473 421.841 L 700.951 421.298 C 698.92 420.597 696.906 419.956 694.883 419.4 C 692.91 418.73 691.025 418 688.989 417.421 C 687.993 417.157 687.024 416.931 686.091 416.763 C 685.157 416.55 684.319 416.308 683.465 416.2 C 684.436 414.002 683.094 411.397 680.382 408.75 C 679.717 408.087 678.953 407.443 678.179 406.759 C 677.441 406.059 676.657 405.343 675.845 404.659 C 674.237 403.289 672.537 401.97 670.929 400.827 L 669.821 400.395 C 669.506 400.82 669.2 401.291 668.887 401.716 C 668.299 402.605 667.72 403.457 667.19 404.264 L 664.553 408.354 L 663.582 406.505 C 661.286 408.384 659.191 410.496 657.329 412.807 C 654.834 416.12 652.605 419.626 650.664 423.291 C 643.895 431.509 637.678 440.084 628.477 443.897 C 627.273 444.498 626.122 445.201 625.037 445.998 L 624.976 445.998 L 624.976 446.042 C 623.249 447.28 621.663 448.705 620.248 450.29 C 618.039 452.927 616.212 455.863 614.821 459.01 C 612.337 464.788 610.87 470.952 610.487 477.231 L 583.684 534.914 L 548.36 445.991 L 507 445.991 L 568.317 591.846 L 598.264 591.846 L 659.647 448.159 C 660.76 447.503 661.941 446.936 663.129 446.385 C 665.027 445.588 666.828 444.577 668.497 443.372 C 669.301 442.741 670.015 442.003 670.619 441.178 C 670.82 440.891 670.801 440.854 670.775 440.798 L 670.712 440.564 C 670.656 440.396 670.568 440.189 670.444 439.902 C 670.444 439.902 671.511 440.877 672.472 441.918 C 673.455 442.915 674.358 444.005 674.395 444.056 C 674.395 444.005 674.584 443.192 674.608 443.153 C 674.608 443.153 674.82 443.666 675.039 444.191 C 675.273 444.674 675.506 445.181 675.506 445.181 C 675.539 445.137 675.74 445.543 675.845 445.806 C 675.649 444.831 675.436 442.539 675.306 440.672 C 675.273 439.995 675.219 439.388 675.182 438.805 C 675.67 438.947 676.349 438.571 676.479 440.051 C 676.299 440.628 676.164 441.219 676.078 441.818 C 675.974 442.444 675.905 443.075 675.87 443.708 C 675.927 444.063 675.959 444.421 675.966 444.779 L 675.966 445.078 C 675.976 444.979 675.976 444.879 675.966 444.779 C 676.043 443.662 676.344 442.571 676.851 441.573 C 677.252 442.343 677.551 442.562 677.525 442.973 C 677.576 443.106 677.418 443.134 677.602 443.372 C 677.882 443.68 678.19 444.019 678.573 444.413 C 679.292 445.195 680.207 446.311 681.799 447.87 C 686.079 448.769 690.242 450.154 694.208 451.998 C 697.858 453.165 700.617 453.751 701.385 451.585 C 705.038 453.175 708.85 454.374 712.756 455.161 C 716.633 456.019 720.578 456.538 724.545 456.713 C 731.957 457.065 739.385 456.611 746.699 455.359 C 746.699 455.359 748.087 454.412 749.469 453.492 C 750.802 452.507 752.036 451.464 752.036 451.464 C 755.54 451.465 759.029 451.025 762.422 450.155 C 765.221 449.351 767.952 448.328 770.591 447.097 C 775.542 444.53 780.377 441.566 787.053 438.247 L 786.488 439.951 L 789.545 436.683 C 790.981 434.993 792.421 433.324 792.421 433.324 C 794.816 432.857 797.116 431.989 799.224 430.757 C 799.429 430.626 799.623 430.468 799.824 430.314 L 803.964 435.63 C 806.116 434.784 808.125 433.614 809.923 432.16 C 810.986 431.956 812.066 431.851 813.148 431.847 C 814.216 431.715 815.291 431.655 816.367 431.667 C 818.528 431.649 820.801 432.076 822.914 432.111 C 825.075 432.23 827.259 432.473 829.32 432.557 C 831.199 432.558 833.076 432.416 834.933 432.132 L 832.966 433.672 C 831.958 434.438 830.954 435.215 830.954 435.215 C 830.954 435.215 832.513 435.472 834.068 435.721 C 835.678 435.955 837.286 436.188 837.286 436.188 C 839.697 435.292 841.412 434.573 842.997 434.071 C 844.582 433.57 845.947 433.177 847.243 432.631 C 851.066 431.185 854.617 429.102 857.745 426.47 C 860.685 425.679 863.386 424.18 865.613 422.105 C 865.696 420.94 865.716 419.771 865.672 418.604 C 865.175 415.433 865.449 412.188 866.472 409.145 C 867.887 409.227 869.292 409.428 870.673 409.745 C 871.755 409.99 872.792 410.402 873.747 410.968 L 873.798 409.408 C 876.216 403.494 877.6 401.622 879.143 400.507 C 882.235 398.843 885.132 396.839 887.779 394.532 L 890.185 388.104 C 890.523 389.988 891.721 388.832 893.716 386.356 C 893.848 386.173 893.992 386 894.148 385.838 L 894.328 385.871 L 894.722 385.941 C 895.003 385.969 895.273 386.068 895.506 386.228 C 895.973 386.615 896.351 387.514 896.258 389.603 C 896.351 391.199 894.797 397.139 893.954 401.837 C 893.088 406.647 892.685 410.239 895.082 410.965 C 894.388 413.617 894.396 416.403 895.105 419.05 C 895.417 420.044 895.835 421.002 896.351 421.907 C 896.916 422.84 897.579 423.725 898.272 424.687 C 899.816 426.762 901.181 428.964 902.352 431.271 C 903.612 433.825 904.509 436.543 905.015 439.346 C 904.644 442.473 905.282 445.636 906.838 448.374 C 908.005 450.551 908.567 452.082 905.671 453.63 L 905.225 452.346 L 902.546 454.519 C 901.229 455.621 899.885 456.736 899.885 456.736 L 904.371 455.824 C 904.419 458.453 904.725 461.072 905.283 463.642 C 906.02 466.381 905.702 469.296 904.394 471.811 C 904.394 471.811 907.344 473.51 910.245 475.214 C 911.688 476.022 913.125 476.818 914.213 477.401 C 915.301 477.985 916.11 478.311 916.11 478.311 C 914.472 476.086 913.462 473.461 913.186 470.712 L 912.103 471.463 C 911.025 469.006 907.405 463.264 908.462 459.649 L 910.922 462.739 C 910.761 458.323 913.69 461.077 914.792 461.899 C 915.886 470.385 919.184 466.714 922.403 472.077 C 922.305 473.62 923.103 476.213 921.436 475.903 C 923.915 478.778 925.528 489.19 929.636 487.215 C 929.573 487.61 929.475 487.81 929.428 488.172 C 935.594 482.632 940.849 476.156 945 468.98 L 945 467.58 C 943.922 466.548 942.722 465.575 941.618 464.655 C 940.377 463.538 939.027 462.548 937.59 461.698 C 937.651 459.917 937.451 458.136 936.997 456.412 C 936.8 455.652 936.54 454.909 936.22 454.192 C 935.919 453.492 935.718 452.769 935.379 452.092 C 934.001 449.408 932.265 446.924 930.219 444.707 C 929.162 443.536 928.216 442.269 927.393 440.924 C 926.483 439.58 925.664 438.176 924.942 436.723 C 924.174 435.178 923.561 433.56 923.112 431.894 C 922.912 430.983 922.795 430.055 922.762 429.123 C 922.739 428.64 922.711 428.138 922.711 427.634 C 922.741 426.978 922.741 426.302 922.762 425.618 Q 922.26 420.595 921.733 415.948 C 921.528 414.415 921.345 412.886 921.156 411.388 C 921.07 409.833 920.974 408.298 920.893 406.759 C 920.522 400.785 920.171 395.066 919.814 389.39 C 919.252 376.527 919.708 363.639 921.18 350.847 C 918.479 353.618 916.925 353.609 916.117 351.751 C 915.645 350.417 915.404 349.013 915.403 347.599 C 915.352 346.702 915.34 345.689 915.352 344.611 C 915.378 344.06 915.389 343.498 915.403 342.907 L 915.434 342.032 C 915.448 341.719 915.34 341.687 915.303 341.5 C 910.002 345.451 904.41 348.598 898.069 353.282"
                        fill="rgb(93,93,91)"></path>
                    <path class="cls-blue"
                        d=" M 632.195 439.33 C 628.774 442.284 613.454 448.789 609.712 464.284 C 605.971 479.779 599.602 497.534 593.571 506.818 C 587.565 516.063 573.102 539.528 568.598 591.837 L 568.661 591.837 C 569.657 587.22 577.322 552.988 588.854 535.988 C 601.224 517.734 609.724 503.887 613.465 493.456 C 617.207 483.026 621.452 452.864 629.103 448.138 C 636.753 443.412 642 433.462 644.605 430.687 C 644.397 430.818 635.591 436.443 632.209 439.323"
                        fill="rgb(25,145,135)"></path>
                    <path class="cls-blue"
                        d=" M 644.593 496.693 L 644.593 550.243 L 677.21 550.243 L 677.21 538.448 L 659.472 538.448 L 659.472 529.21 L 676.265 529.21 L 676.265 517.41 L 659.472 517.41 L 659.472 508.501 L 677.21 508.501 L 677.21 496.698 L 644.593 496.693 Z "
                        fill="rgb(25,145,135)"></path>
                    <path class="cls-blue"
                        d=" M 701.588 507.374 L 704.328 507.374 C 710.093 507.374 713.529 509.852 713.529 514.025 C 713.529 518.198 710.177 520.684 704.328 520.684 L 701.583 520.684 L 701.588 507.374 Z  M 686.681 496.693 L 686.681 550.243 L 701.588 550.243 L 701.588 529.705 L 715.769 550.243 L 734.359 550.243 L 716.299 528.328 C 724.468 526.549 728.853 521.249 728.853 513.22 C 728.845 508.793 727.082 504.55 723.952 501.42 C 720.612 498.133 716.381 496.691 709.85 496.691 L 686.681 496.693 Z "
                        fill="rgb(25,145,135)"></path>
                    <path class="cls-blue"
                        d=" M 755.558 508.501 L 758.984 508.501 C 768.892 508.501 775.348 514.443 775.348 523.422 C 775.348 532.503 768.89 538.45 758.984 538.45 L 755.551 538.45 L 755.558 508.501 Z  M 740.663 496.698 L 740.663 550.248 L 762.681 550.248 C 777.852 550.248 790.922 537.895 790.922 523.424 C 790.922 509.054 777.852 496.698 762.681 496.698 L 740.663 496.698 Z "
                        fill="rgb(25,145,135)"></path>
                    <path class="cls-blue"
                        d=" M 813.494 523.587 C 813.03 516.942 816.677 510.689 822.691 507.822 C 828.704 504.955 835.859 506.058 840.729 510.603 C 845.6 515.147 847.196 522.208 844.752 528.406 C 842.308 534.603 836.323 538.675 829.661 538.672 C 821.032 538.97 813.794 532.217 813.494 523.587 Z  M 797.922 523.587 C 797.922 539.869 811.515 552.153 829.663 552.153 C 847.812 552.153 861.426 539.869 861.426 523.587 C 861.426 507.306 847.84 495.085 829.663 495.085 C 811.487 495.085 797.922 507.374 797.922 523.587 Z "
                        fill="rgb(25,145,135)"></path>
                    <path class="cls-blue"
                        d=" M 913.247 496.693 L 913.247 529.441 L 885.799 496.693 L 870.923 496.693 L 870.923 550.243 L 885.799 550.243 L 885.799 517.482 L 913.247 550.243 L 928.13 550.243 L 928.13 496.693 L 913.247 496.693 Z "
                        fill="rgb(25,145,135)"></path>
                </svg>
            </a>
        </div>

        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
    </header>

    <main class="flex-1 mt-6 flex items-center justify-center">
        {{ $slot }}
    </main>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70 flex-shrink-0">
        <span>Made with Love - </span>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP
        v{{ PHP_VERSION }})
    </footer>
</body>


</html>


{{-- <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
        src="https://laravel.com/assets/img/welcome/background.svg" /> --}}
