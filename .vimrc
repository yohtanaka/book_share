" setting

" =======================================================
" ファイル系
" =======================================================
"文字コードをUFT-8に設定
set fenc=utf-8
" バックアップファイルを作らない
set nobackup
" スワップファイルを作らない
set noswapfile
" 編集中のファイルが変更されたら自動で読み直す
set autoread
" バッファが編集中でもその他のファイルを開けるように
set hidden
" 入力中のコマンドをステータスに表示する
set showcmd

" =======================================================
" 見た目系
" =======================================================
" 行番号を表示
set number
" 現在の行を強調表示
"set cursorline
" 行末の1文字先までカーソルを移動できるように
set virtualedit=onemore
" インデントはスマートインデント
set smartindent
" ビープ音を可視化
set visualbell
" 括弧入力時の対応する括弧を表示
set showmatch
" ステータスラインを常に表示
set laststatus=2
" コマンドラインの補完
set wildmode=list:longest
" 折り返し時に表示行単位での移動できるようにする
nnoremap j gj
nnoremap k gk

" =======================================================
" Tab系
" =======================================================
" 行頭以外のTab文字の表示幅（スペースいくつ分）
set tabstop=2
" 行頭でのTab文字の表示幅
set shiftwidth=2

" =======================================================
" 検索系
" =======================================================
" 検索文字列が小文字の場合は大文字小文字を区別なく検索する
set ignorecase
" 検索文字列に大文字が含まれている場合は区別して検索する
set smartcase
" 検索文字列入力時に順次対象文字列にヒットさせる
set incsearch
" 検索時に最後まで行ったら最初に戻る
set wrapscan
" 検索語をハイライト表示
set hlsearch

" =======================================================
" キーバインド系
" =======================================================
" jjでESCにバインド
inoremap <silent> jj <ESC> 

" =======================================================
" 折り畳み系
" =======================================================
" マーカーにより折り畳み
set foldmethod=manual
" ビューの自動保存
autocmd BufWinLeave ?* silent mkview
" ビューの自動復元
autocmd BufWinEnter ?* silent loadview

" =======================================================
" 追加プラグイン用
" =======================================================

" PDV - phpDocumentor for Vim
" source ~/.vim/php-doc.vim
" inoremap <C-P> <ESC>:call PhpDocSingle()<CR>i 
" nnoremap <C-P> :call PhpDocSingle()<CR> 
" vnoremap <C-P> :call PhpDocRange()<CR> 

" =======================================================
" バッファ移動
" =======================================================

inoremap <C-Right> <ESC> :bn <CR>
nnoremap <C-Right> :bn <CR>
vnoremap <C-Right> :bn <CR>
inoremap <C-Left> <ESC> :bp <CR>
nnoremap <C-Left> :bp <CR>
vnoremap <C-Left> :bp <CR>
inoremap <C-c> <ESC> :bd! <CR>
nnoremap <C-c> :bd! <CR>
vnoremap <C-c> :bd! <CR>

" =======================================================
" ペーストモード対策
" =======================================================

autocmd InsertLeave * set nopaste

" =======================================================
" 矢印キー無効化
" =======================================================

function! HardMode ()
	noremap <Up> <Nop>
	noremap <Down> <Nop>
	noremap <Left> <Nop>
	noremap <Right> <Nop>
endfunction

function! EasyMode ()
	noremap <Up> <Up>
	noremap <Down> <Down>
	noremap <Left> <Left>
	noremap <Right> <Right>
endfunction

command! HardMode call HardMode()

