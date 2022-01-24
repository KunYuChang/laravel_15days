<header class=" @isset($red) red @else blue @endisset">
    <nav>
        <ul>
            <!-- 使用Log來debug -->
            @php Illuminate\Support\Facades\Log::info(request()->path()); @endphp
            <li class="@if(request()->is('/')) active @endif">
                <a href="/">首頁</a>
            </li>
            <!-- 發現request()傳過來並非/about而是about，找到問題癥結點  -->
            <li class="@if(request()->is('about')) active @endif">
                <a href="/about">關於我們</a>
            </li>
            <li class="@if(request()->is('posts')) active @endif">
                <a href="/posts">查看文章</a>
            </li>
            <li class="@if(request()->is('contact')) active @endif">
                <a href="/contact">聯絡我們</a>
            </li>
        </ul>
    </nav>
</header>