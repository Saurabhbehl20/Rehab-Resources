module.exports = {
  "entry": {
    "app": {
      "import": [
        "@scripts/app",
        "@styles/app"
      ]
    },
    "editor": {
      "import": [
        "@scripts/editor",
        "@styles/editor"
      ]
    }
  },
  "bail": true,
  "cache": {
    "name": "bud.production",
    "type": "filesystem",
    "version": "ulb83hr1166qqmhovrhh0gk2tg4_",
    "cacheDirectory": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/.budfiles/cache/webpack",
    "managedPaths": [
      "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules"
    ],
    "buildDependencies": {
      "bud": [
        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/package.json",
        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/.editorconfig",
        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/bud.config.js",
        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/composer.json",
        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/jsconfig.json",
        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/tailwind.config.js",
        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/theme.json"
      ]
    }
  },
  "context": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources",
  "infrastructureLogging": {
    "console": {
      "Console": {}
    },
    "level": "none"
  },
  "mode": "production",
  "module": {
    "noParse": {},
    "rules": [
      {
        "test": {},
        "exclude": [
          {}
        ],
        "parser": {
          "requireEnsure": false
        }
      },
      {
        "oneOf": [
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources"
            ],
            "use": [
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/babel-loader/lib/index.js",
                "options": {
                  "cacheDirectory": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/.budfiles/cache/babel",
                  "presets": [
                    [
                      "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/@babel/preset-env/lib/index.js"
                    ],
                    [
                      "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/@babel/preset-react/lib/index.js"
                    ]
                  ],
                  "plugins": [
                    [
                      "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/@babel/plugin-transform-runtime/lib/index.js",
                      {
                        "helpers": false
                      }
                    ],
                    [
                      "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/@babel/plugin-proposal-object-rest-spread/lib/index.js"
                    ],
                    [
                      "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/@babel/plugin-syntax-dynamic-import/lib/index.js"
                    ],
                    [
                      "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/@babel/plugin-proposal-class-properties/lib/index.js"
                    ]
                  ],
                  "env": {
                    "development": {
                      "compact": false
                    }
                  },
                  "root": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources"
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources"
            ],
            "use": [
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/mini-css-extract-plugin/dist/loader.js"
              },
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/css-loader/dist/cjs.js",
                "options": {
                  "importLoaders": 1,
                  "sourceMap": false
                }
              },
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/postcss-loader/dist/cjs.js",
                "options": {
                  "postcssOptions": {
                    "plugins": [
                      [
                        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/postcss-import/index.js"
                      ],
                      [
                        null
                      ],
                      [
                        null
                      ],
                      [
                        "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/postcss-preset-env/dist/index.cjs",
                        {
                          "stage": 1,
                          "features": {
                            "focus-within-pseudo-class": false
                          }
                        }
                      ]
                    ]
                  },
                  "sourceMap": true
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources"
            ],
            "use": [
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/mini-css-extract-plugin/dist/loader.js"
              },
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/css-loader/dist/cjs.js",
                "options": {
                  "importLoaders": 1,
                  "localIdentName": "[name]__[local]___[hash:base64:5]",
                  "modules": true,
                  "sourceMap": false
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources"
            ],
            "type": "asset",
            "generator": {
              "filename": "fonts/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources"
            ],
            "exclude": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules"
            ],
            "type": "json",
            "parser": {}
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources"
            ],
            "exclude": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules"
            ],
            "use": [
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/js-yaml-loader/index.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources"
            ],
            "exclude": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules"
            ],
            "use": [
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/html-loader/dist/cjs.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources"
            ],
            "exclude": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules"
            ],
            "use": [
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/csv-loader/index.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources"
            ],
            "exclude": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules"
            ],
            "use": [
              {
                "loader": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules/xml-loader/index.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources"
            ],
            "exclude": [
              "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/node_modules"
            ],
            "type": "json",
            "parser": {}
          }
        ]
      }
    ],
    "unsafeCache": false
  },
  "name": "bud",
  "node": false,
  "output": {
    "assetModuleFilename": "[name].[contenthash:6][ext]",
    "chunkFilename": "[name].[contenthash:6].js",
    "filename": "[name].[contenthash:6].js",
    "path": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/public",
    "pathinfo": false,
    "publicPath": ""
  },
  "optimization": {
    "emitOnErrors": false,
    "minimize": true,
    "minimizer": [
      "...",
      {
        "options": {
          "test": {},
          "parallel": true,
          "minimizer": {
            "options": {
              "preset": [
                "default",
                {
                  "discardComments": {
                    "removeAll": true
                  }
                }
              ]
            }
          }
        }
      }
    ],
    "runtimeChunk": "single",
    "splitChunks": {
      "cacheGroups": {
        "bud": {
          "chunks": "all",
          "test": {},
          "reuseExistingChunk": true,
          "priority": -10
        },
        "vendor": {
          "chunks": "all",
          "test": {},
          "reuseExistingChunk": true,
          "priority": -20
        }
      }
    }
  },
  "parallelism": 10,
  "performance": {
    "hints": false
  },
  "recordsPath": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/.budfiles/bud/modules.json",
  "stats": {
    "preset": "errors-warnings"
  },
  "target": "browserslist:/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/package.json",
  "plugins": [
    {
      "patterns": [
        {
          "from": "images",
          "to": "[name].[contenthash:6][ext]",
          "context": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources",
          "noErrorOnMissing": true
        }
      ],
      "options": {}
    },
    {
      "options": {
        "assetHookStage": null,
        "basePath": "",
        "fileName": "manifest.json",
        "filter": null,
        "map": null,
        "publicPath": "",
        "removeKeyHash": {},
        "sort": null,
        "transformExtensions": {},
        "useEntryKeys": false,
        "useLegacyEmit": false,
        "writeToFileEmit": true
      }
    },
    {
      "_sortedModulesCache": {},
      "options": {
        "filename": "[name].[contenthash:6].css",
        "ignoreOrder": false,
        "runtime": true,
        "chunkFilename": "[name].[contenthash:6].css"
      },
      "runtimeOptions": {
        "linkType": "text/css"
      }
    },
    {
      "options": {
        "enabled": true,
        "verbose": false,
        "extensions": {},
        "ignore": [],
        "remove": {}
      },
      "enabled": true,
      "verbose": false
    },
    {
      "options": {
        "emitHtml": false,
        "publicPath": ""
      },
      "plugin": {
        "name": "EntrypointsManifestPlugin",
        "stage": null
      },
      "name": "entrypoints.json"
    },
    {
      "name": "WordPressExternalsWebpackPlugin",
      "stage": null,
      "externals": {
        "type": "window"
      }
    },
    {
      "plugin": {
        "name": "WordPressDependenciesWebpackPlugin",
        "stage": null
      },
      "manifest": {},
      "usedDependencies": {},
      "fileName": "wordpress.json"
    },
    {
      "plugin": {
        "name": "MergedManifestPlugin"
      },
      "file": "entrypoints.json",
      "entrypointsName": "entrypoints.json",
      "wordpressName": "wordpress.json"
    }
  ],
  "resolve": {
    "alias": {
      "@src": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources",
      "@dist": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/public",
      "@fonts": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources/fonts",
      "@images": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources/images",
      "@scripts": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources/scripts",
      "@styles": "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources/styles"
    },
    "extensions": [
      ".mjs",
      ".cjs",
      ".js",
      ".jsx",
      ".css",
      ".json",
      ".wasm",
      ".yml",
      ".toml"
    ],
    "modules": [
      "/sites/rehabresourcesinc.demo.techyscouts.dev/files/web/wp-content/themes/rehab-resources/resources",
      "node_modules"
    ]
  }
}