<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'LyTest',
    'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Foo',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'echoLoop',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'range',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
              'line' => 5,
              'char' => 46,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'sum',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                    'line' => 6,
                    'char' => 20,
                  ),
                  'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                  'line' => 6,
                  'char' => 20,
                ),
              ),
              'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
              'line' => 7,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'loop',
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'sub-assign',
                      'variable' => 'range',
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '1',
                        'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                        'line' => 8,
                        'char' => 26,
                      ),
                      'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                      'line' => 8,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                  'line' => 9,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'incr',
                      'variable' => 'sum',
                      'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                      'line' => 9,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                  'line' => 10,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'less-equal',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'range',
                      'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                      'line' => 10,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                      'line' => 10,
                      'char' => 26,
                    ),
                    'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                    'line' => 10,
                    'char' => 26,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'break',
                      'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                      'line' => 12,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                  'line' => 13,
                  'char' => 9,
                ),
              ),
              'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
              'line' => 14,
              'char' => 12,
            ),
            2 => 
            array (
              'type' => 'echo',
              'expressions' => 
              array (
                0 => 
                array (
                  'type' => 'concat',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'sum',
                    'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                    'line' => 14,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '\\n',
                    'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                    'line' => 14,
                    'char' => 24,
                  ),
                  'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
                  'line' => 14,
                  'char' => 24,
                ),
              ),
              'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
              'line' => 15,
              'char' => 5,
            ),
          ),
          'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
          'line' => 5,
          'char' => 26,
        ),
      ),
      'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/home/liuyue/misc/ext-test/lytest/lytest/foo.zep',
    'line' => 3,
    'char' => 5,
  ),
);