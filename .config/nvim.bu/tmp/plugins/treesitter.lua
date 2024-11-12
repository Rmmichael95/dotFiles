local ts = require'nvim-treesitter.configs'
ts.setup {
  highlight = {
   enable = true,
    disable = {},
  },
  indent = {
    enable = false,
    disable = {},
  },
  ensure_installed = {
    "bash",
    "javascript",
    "toml",
    "json",
    "yaml",
    "latex",
    "regex",
    "typescript",
    "lua",
    "commonlisp",
    "r",
    "python",
    "go",
    "rust",
    "c",
    "cpp",
    "zig"
  },
  autopairs = {
    enable = true,
  },
  autotag = {
    enable = true,
  }
}

local parser_config = require "nvim-treesitter.parsers".get_parser_configs()
parser_config.tsx.filetype_to_parse = { "javascript", "typescript.tsx" }