<?php

class __Mustache_95feddc788191b77a866d49467ee4638 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'competencycount' section
        $value = $context->find('competencycount');
        $buffer .= $this->section351f91486ec0fb9debf1bf9859182be9($context, $indent, $value);

        return $buffer;
    }

    private function sectionAe94f3c7f26852b54ed1cb700c10d3e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xcompetencieslinkedoutofy, tool_lp, { "x": "{{linkedcompetencycount}}", "y": "{{competencycount}}" } ';
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
                
                $buffer .= 'xcompetencieslinkedoutofy, tool_lp, { "x": "';
                $value = $this->resolveValue($context->find('linkedcompetencycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('competencycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section595c8911fc8cd0d7e5f3c7a127ba1188(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xplanscompletedoutofy, tool_lp, { "x": "{{completedplancount}}", "y": "{{plancount}}" } ';
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
                
                $buffer .= 'xplanscompletedoutofy, tool_lp, { "x": "';
                $value = $this->resolveValue($context->find('completedplancount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('plancount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9b9f134ea9c304b14baab8255dc70a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xplanscompletedoutofy, tool_lp, { "x": "{{completedplancount}}", "y": "{{plancount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{completedplanpercentage}}{{/percentage}}
            {{$percentlabel}}{{completedplanpercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    ';
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
                
                $buffer .= '        ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'blockEa7d0f7fd4ee2d374eccb49f06153301'),
                        'percentage' => array($this, 'block380186c763041841831b1e4748b91f95'),
                        'percentlabel' => array($this, 'block6211a2b05231a115c565ed0a0b6ae82d'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB59ef61de4558aae303d052154bbd5f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'averageproficiencyrate, tool_lp, {{proficientusercompetencyplanpercentageformatted}} ';
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
                
                $buffer .= 'averageproficiencyrate, tool_lp, ';
                $value = $this->resolveValue($context->find('proficientusercompetencyplanpercentageformatted'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86aaa8c5394af5ed0316c204990defe8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}averageproficiencyrate, tool_lp, {{proficientusercompetencyplanpercentageformatted}} {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientusercompetencyplanpercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientusercompetencyplanpercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    ';
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
                
                $buffer .= '        ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'block1ba522971b2263c890bf094f607c5063'),
                        'percentage' => array($this, 'block3ad0377584f3bcb272c8306ea73a634a'),
                        'percentlabel' => array($this, 'blockBfa0303a9092d244ca5c48316080ca92'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7137b26b8f6b76f90efdf5949b9c3237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competenciesmostoftennotproficient, tool_lp';
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
                
                $buffer .= 'competenciesmostoftennotproficient, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8859b16250cc6b2db0497ef303ae821e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="#competency_link_{{id}}">
                ';
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
                
                $buffer .= $indent . '                <a href="#competency_link_';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f3c1a3040ba9b182a1d2a4c68f26cac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                </a>
                ';
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
                
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5bb66cecce6dc813b45a3dc85fb2c4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#showcompetencylinks}}
                <a href="#competency_link_{{id}}">
                {{/showcompetencylinks}}
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                {{#showcompetencylinks}}
                </a>
                {{/showcompetencylinks}}
            ';
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
                
                // 'showcompetencylinks' section
                $value = $context->find('showcompetencylinks');
                $buffer .= $this->section8859b16250cc6b2db0497ef303ae821e($context, $indent, $value);
                $buffer .= $indent . '                <div><p>';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= $value;
                $buffer .= ' <em>';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</em></p></div>
';
                // 'showcompetencylinks' section
                $value = $context->find('showcompetencylinks');
                $buffer .= $this->section6f3c1a3040ba9b182a1d2a4c68f26cac($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95d56bea081672454a8f15b540cf535f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficient, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                {{#showcompetencylinks}}
                <a href="#competency_link_{{id}}">
                {{/showcompetencylinks}}
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                {{#showcompetencylinks}}
                </a>
                {{/showcompetencylinks}}
            {{/leastproficient}}
        </div>
    </div>
    ';
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
                
                $buffer .= '    <div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7137b26b8f6b76f90efdf5949b9c3237($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div>
';
                // 'leastproficient' section
                $value = $context->find('leastproficient');
                $buffer .= $this->sectionB5bb66cecce6dc813b45a3dc85fb2c4b($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section351f91486ec0fb9debf1bf9859182be9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="templatestatistics" class="border p-2 mb-2">
    {{< tool_lp/progress_bar}}
        {{$progresstext}}
            {{#str}}xcompetencieslinkedoutofy, tool_lp, { "x": "{{linkedcompetencycount}}", "y": "{{competencycount}}" } {{/str}}
        {{/progresstext}}
        {{$percentage}}{{linkedcompetencypercentage}}{{/percentage}}
        {{$percentlabel}}{{linkedcompetencypercentageformatted}}&nbsp;%{{/percentlabel}}
    {{/tool_lp/progress_bar}}
    {{#plancount}}
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xplanscompletedoutofy, tool_lp, { "x": "{{completedplancount}}", "y": "{{plancount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{completedplanpercentage}}{{/percentage}}
            {{$percentlabel}}{{completedplanpercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    {{/plancount}}
    {{#usercompetencyplancount}}
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}averageproficiencyrate, tool_lp, {{proficientusercompetencyplanpercentageformatted}} {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientusercompetencyplanpercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientusercompetencyplanpercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    {{/usercompetencyplancount}}
    {{#leastproficientcount}}
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficient, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                {{#showcompetencylinks}}
                <a href="#competency_link_{{id}}">
                {{/showcompetencylinks}}
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                {{#showcompetencylinks}}
                </a>
                {{/showcompetencylinks}}
            {{/leastproficient}}
        </div>
    </div>
    {{/leastproficientcount}}
</div>
';
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
                
                $buffer .= $indent . '<div data-region="templatestatistics" class="border p-2 mb-2">
';
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'block27c784e83b74bf86c2145d55c394f073'),
                        'percentage' => array($this, 'block1c4e01e65281cb98ea03050ae6df05e1'),
                        'percentlabel' => array($this, 'blockB509e42c0b491e5ad165605b4679a7d9'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                // 'plancount' section
                $value = $context->find('plancount');
                $buffer .= $this->sectionB9b9f134ea9c304b14baab8255dc70a9($context, $indent, $value);
                // 'usercompetencyplancount' section
                $value = $context->find('usercompetencyplancount');
                $buffer .= $this->section86aaa8c5394af5ed0316c204990defe8($context, $indent, $value);
                // 'leastproficientcount' section
                $value = $context->find('leastproficientcount');
                $buffer .= $this->section95d56bea081672454a8f15b540cf535f($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block27c784e83b74bf86c2145d55c394f073($context)
    {
        $indent = $buffer = '';
        $buffer .= '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAe94f3c7f26852b54ed1cb700c10d3e0($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block1c4e01e65281cb98ea03050ae6df05e1($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('linkedcompetencypercentage'), $context);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function blockB509e42c0b491e5ad165605b4679a7d9($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('linkedcompetencypercentageformatted'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }

    public function blockEa7d0f7fd4ee2d374eccb49f06153301($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section595c8911fc8cd0d7e5f3c7a127ba1188($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block380186c763041841831b1e4748b91f95($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('completedplanpercentage'), $context);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function block6211a2b05231a115c565ed0a0b6ae82d($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('completedplanpercentageformatted'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }

    public function block1ba522971b2263c890bf094f607c5063($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB59ef61de4558aae303d052154bbd5f0($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block3ad0377584f3bcb272c8306ea73a634a($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientusercompetencyplanpercentage'), $context);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function blockBfa0303a9092d244ca5c48316080ca92($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientusercompetencyplanpercentageformatted'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }
}
