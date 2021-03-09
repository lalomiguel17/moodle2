<?php

class __Mustache_1d76a689cc8571aa3ed6d96ceab01bf2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="p-3 bg-white">
';
        $buffer .= $indent . '    <p data-region="title"></p>
';
        $buffer .= $indent . '    <p class="text-muted" data-region="text"></p>
';
        $buffer .= $indent . '    <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
';
        $buffer .= $indent . '        <span data-region="dialogue-button-text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDa90d06ab5e06fe3de5fcf18510c4f78($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="hidden" data-region="loading-icon-container">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionDa90d06ab5e06fe3de5fcf18510c4f78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sendcontactrequest, core_message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sendcontactrequest, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
