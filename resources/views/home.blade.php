@extends('layouts.app')

@section('content')
    <div class="profileContent">
        <h3 class="profileTitle">Profile</h3>
        <p>2000年生まれ、埼玉県出身。独学でJavaを学習後、エンジニアとして就職。</p>
    </div>

    <div class="profileContent">
        <h3 class="profileTitle">Practical Business</h3>
        <ul class="profileDetailWrapper">
            <li class="profileDetail">
                <h5 class="profileDetailTitle">■アフターサービス業務管理システムの開発</h5>
                <p>
                    修理・保守等のメンテナンス業務管理を支援するWebシステムの開発を担当。<br>
                    ・既存システムの不具合の改修、単体テスト<br>
                    ・帳票出力内容の変更<br>
                    ・新規機能追加、単体テスト<br>
                    →一覧画面からのCSVインポート機能、Excel出力機能、Office365とのスケジュール連携API等<br>
                    <br>
                    【システム概要】<br>
                    使用言語:PHP,JavaScript,HTML<br>
                    DB:MySQL<br>
                    OS:Windows<br>
                    FW:Laravel,React
                </p>
            </li>
            <li class="profileDetail">
                <h5 class="profileDetailTitle">■勤怠管理システムの開発</h5>
                <p>
                    勤怠管理システムの小規模な修正・開発を担当。<br>
                    <br>
                    ・勤務ステータスをプログラム上で判定していたものをDBに情報を持たせて判定するように改修<br>
                    ・一覧画面をcsv出力する機能を開発<br>
                    <br>
                    【システム概要】<br>
                    使用言語:PHP,JavaScript<br>
                    DB:MySQL<br>
                    OS:Windows<br>
                    FW:CakePHP
                </p>
            </li>
            <li class="profileDetail">
                <h5 class="profileDetailTitle">■要因管理システムの開発</h5>
                <p>
                    社員情報と案件を管理するシステムの修正・開発を担当。<br>
                    <br>
                    ・新規画面の開発<br>
                    ・既存画面の統合、仕様修正<br>
                    ・バグ修正<br>
                    <br>
                    【システム概要】<br>
                    使用言語:Java,JavaScript,HTML<br>
                    DB:MySQL<br>
                    OS:Windows<br>
                    FW:SpringBoot,JQuery,BootStrap
                </p>
            </li>
            <li class="profileDetail">
                <h5 class="profileDetailTitle">■eラーニングシステムの開発</h5>
                <p>
                    eラーニングシステムの修正・開発を担当。<br>
                    ・テスト機能のカスタマイズ、結果のCSV出力機能開発<br>
                    ・翻訳APIの検証<br>
                    <br>
                    【システム概要】<br>
                    使用言語:PHP,JavaScript,HTML<br>
                    DB:MySQL<br>
                    OS:macOS<br>
                    FW:自社フレームワーク<br>
                </p>
            </li>
        </ul>
    </div>
    
    <div class="profileContent">
        <h3 class="profileTitle">Skill</h3>
        <ul class="profileDetailWrapper">
            <li class="profileDetail">
                <h5 class="profileDetailTitle">■言語</h5>
                <ul>
                    <li class="programmingItem"><span class="star5RatingTitle">PHP</span><span class="star5Rating" data-rate="0"></span></li>
                    <li class="programmingItem"><span class="star5RatingTitle">Java</span><span class="star5Rating" data-rate="0.5"></span></li>
                    <li class="programmingItem"><span class="star5RatingTitle">HTML/CSS</span><span class="star5Rating" data-rate="4"></span></li>
                    <li class="programmingItem"><span class="star5RatingTitle">JavaScript</span><span class="star5Rating" data-rate="4"></span></li>
                    <li class="programmingItem"><span class="star5RatingTitle">Ruby</span><span class="star5Rating" data-rate="4"></span></li>
                </ul>
            </li>
            <li class="profileDetail">
                <h5 class="profileDetailTitle">■フレームワーク・DB</h5>
                <ul>
                    <li class="programmingItem"><span class="star5RatingTitle">Laravel</span><span class="star5Rating" data-rate="4"></span></li>
                    <li class="programmingItem"><span class="star5RatingTitle">SpringBoot</span><span class="star5Rating" data-rate="4"></span></li>
                    <li class="programmingItem"><span class="star5RatingTitle">BootStrap</span><span class="star5Rating" data-rate="4"></span></li>
                    <li class="programmingItem"><span class="star5RatingTitle">JQuery</span><span class="star5Rating" data-rate="4"></span></li>
                    <li class="programmingItem"><span class="star5RatingTitle">MySQL</span><span class="star5Rating" data-rate="4"></span></li>
                </ul>
            </li>
        </ul>
    </div>
@endsection
