<!-- Search -->
@php
    $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $requestURL = "$_SERVER[REQUEST_URI]";
    $currentTag = "bla bla bla";
    if (str_contains($requestURL, 'tag')) {
        $currentTag = trim(explode('tag', $requestURL)[1],'=%20');
    }
@endphp

<?php
echo "Request URL: " . $currentTag;
?>
<form action="">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
            ></i>
        </div>
        <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search Laravel Gigs..."
        />
        <input type="hidden" name="tag" value="{{$currentTag}}">
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
            >
                Search
            </button>
        </div>
    </div>
</form>