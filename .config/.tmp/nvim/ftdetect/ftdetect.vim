augroup filetypedetect
    " Video
    autocmd BufRead,BufNewFile *.avi,*.wmv,*.flv,*.mp4,*.mkv,*.mov,*.mpg set filetype=video
    " Audio
    autocmd BufRead,BufNewFile *.mp3,*.flac,*.wav,*.ogg set filetype=audio
    " Image
    autocmd BufRead,BufNewFile *.png,*.jpg,*.jpeg set filetype=image
    " Mail
    autocmd BufRead,BufNewFile *mutt-* set ft=mail
    " calcurse
    autocmd BufRead,BufNewFile /tmp/calcurse*,~/.calcurse/notes/* set ft=markdown
    " Markdown
    autocmd BufRead,BufNewFile *.md,*.md.html set ft=markdown.pandoc
    autocmd BufNewFile,BufRead *.mmark set filetype=markdown
    " config for .pbrt config files
    autocmd BufNewFile,BufRead *.pbrt set filetype=config
    " mathmatica
    autocmd BufNewFile,BufRead *.wl,*.wls set ft=mma
    " CSS
    autocmd BufNewFile,BufRead *.scss,*.sass set ft=scss.css
    " Diff
    autocmd BufRead,BufEnter  *.patch,*.rej,*.diff set ft=diff
    augroup end
