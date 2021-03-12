<?php

class __Mustache_554d95e2508ba77735815a16c2b526c3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="templatecompetenciespage">
';
        $buffer .= $indent . '    <h2>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('template.shortname'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'template.canmanage' section
        $value = $context->findDot('template.canmanage');
        $buffer .= $this->sectionB54c0f0de9f7a5169698895780e22beb($context, $indent, $value);
        $buffer .= $indent . '    </h2>
';
        $buffer .= $indent . '    <div>';
        $value = $this->resolveValue($context->findDot('template.description'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        // 'canmanagetemplatecompetencies' section
        $value = $context->find('canmanagetemplatecompetencies');
        $buffer .= $this->section6a91aa9ca50d6e1440f4e0413ed546f7($context, $indent, $value);
        $buffer .= $indent . '    <h3 class="mt-1">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCecef47f24ab96d76209155f00a90f21($context, $indent, $value);
        $buffer .= '</h3>
';
        // 'statistics' section
        $value = $context->find('statistics');
        $buffer .= $this->section994c5300c2fd2e6ac7dfe7cf5159dd6f($context, $indent, $value);
        $buffer .= $indent . '    <div data-region="templatecompetencies">
';
        $buffer .= $indent . '        <div class="managecompetencies">
';
        $buffer .= $indent . '            <div class="drag-parentnode">
';
        // 'competencies' section
        $value = $context->find('competencies');
        $buffer .= $this->sectionDf9f89e41bf8285ae99fd3b0508a6bad($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        // 'competencies' inverted section
        $value = $context->find('competencies');
        if (empty($value)) {
            
            $buffer .= $indent . '        <p class="alert alert-info">
';
            $buffer .= $indent . '            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionBff79f99a43b8eab5d9b9f1e961f1570($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </p>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-region="actions">
';
        // 'canmanagecompetencyframeworks' section
        $value = $context->find('canmanagecompetencyframeworks');
        $buffer .= $this->sectionA62910100eef74f7a753824c0cc9daf3($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section6199a5c0972784b95c3bd5324a16d397($context, $indent, $value);

        return $buffer;
    }

    private function section083627aa7727faae88e993f15753f9c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edittemplate, tool_lp';
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
                
                $buffer .= 'edittemplate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d73a06efd755fcc05019787e0171f1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core, {{#str}}edittemplate, tool_lp{{/str}}';
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
                
                $buffer .= 't/edit, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section083627aa7727faae88e993f15753f9c1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB54c0f0de9f7a5169698895780e22beb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{pluginbaseurl}}/edittemplate.php?id={{template.id}}&amp;pagecontextid={{pagecontextid}}">{{#pix}}t/edit, core, {{#str}}edittemplate, tool_lp{{/str}}{{/pix}}</a>
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/edittemplate.php?id=';
                $value = $this->resolveValue($context->findDot('template.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section4d73a06efd755fcc05019787e0171f1d($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74c408bed971bae2754501c7f31c29df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addtemplatecompetencies, tool_lp';
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
                
                $buffer .= 'addtemplatecompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a91aa9ca50d6e1440f4e0413ed546f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="actions" class="my-4">
        <button disabled class="btn btn-secondary">{{#str}}addtemplatecompetencies, tool_lp{{/str}}</button>
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
                
                $buffer .= $indent . '    <div data-region="actions" class="my-4">
';
                $buffer .= $indent . '        <button disabled class="btn btn-secondary">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section74c408bed971bae2754501c7f31c29df($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCecef47f24ab96d76209155f00a90f21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'templatecompetencies, tool_lp';
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
                
                $buffer .= 'templatecompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section994c5300c2fd2e6ac7dfe7cf5159dd6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> tool_lp/template_statistics }}
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
                
                if ($partial = $this->mustache->loadPartial('tool_lp/template_statistics')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
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
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1245898a9c4802f609e8da4fe72227c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core, {{#str}}delete{{/str}}';
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
                
                $buffer .= 't/delete, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e81ef846937bcc3bb067b09fa2cf95e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="drag-handlecontainer float-left"></span>
                        <div class="float-sm-right">
                            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">{{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
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
                
                $buffer .= $indent . '                        <span class="drag-handlecontainer float-left"></span>
';
                $buffer .= $indent . '                        <div class="float-sm-right">
';
                $buffer .= $indent . '                            <a href="#" data-action="delete-competency-link" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1245898a9c4802f609e8da4fe72227c2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5d7789e354ad3d8e1d16c95869cc10f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> tool_lp/competency_summary }}
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
                
                if ($partial = $this->mustache->loadPartial('tool_lp/competency_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA09acaa8594cbc572e3991a994f33c9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'linkedcourseslist, tool_lp';
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
                
                $buffer .= 'linkedcourseslist, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6227e403f6dc77225c8769e82caa55bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="list-inline-item"><a href="{{viewurl}}?id={{id}}">{{{fullname}}} ({{{shortname}}})</a></li>
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
                
                $buffer .= $indent . '                            <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= ' (';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= $value;
                $buffer .= ')</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA25311e95efff4e00590c1e80471ce3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <ul class="inline list-inline">
                        {{#linkedcourses}}
                            <li class="list-inline-item"><a href="{{viewurl}}?id={{id}}">{{{fullname}}} ({{{shortname}}})</a></li>
                        {{/linkedcourses}}
                        </ul>
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
                
                $buffer .= $indent . '                        <ul class="inline list-inline">
';
                // 'linkedcourses' section
                $value = $context->find('linkedcourses');
                $buffer .= $this->section6227e403f6dc77225c8769e82caa55bc($context, $indent, $value);
                $buffer .= $indent . '                        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87db60fdde5590abde9bb54d15b0323c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nolinkedcourses, tool_lp';
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
                
                $buffer .= 'nolinkedcourses, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf9f89e41bf8285ae99fd3b0508a6bad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="drag-samenode" data-id="{{competency.id}}">
                    <div class="border p-2 mb-2">
                        {{#canmanagetemplatecompetencies}}
                        <span class="drag-handlecontainer float-left"></span>
                        <div class="float-sm-right">
                            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">{{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}</a>
                        </div>
                        {{/canmanagetemplatecompetencies}}
                        {{#competency}}
                            {{> tool_lp/competency_summary }}
                        {{/competency}}
                        <strong>{{#str}}linkedcourseslist, tool_lp{{/str}}</strong>
                        {{#hascourses}}
                        <ul class="inline list-inline">
                        {{#linkedcourses}}
                            <li class="list-inline-item"><a href="{{viewurl}}?id={{id}}">{{{fullname}}} ({{{shortname}}})</a></li>
                        {{/linkedcourses}}
                        </ul>
                        {{/hascourses}}
                        {{^hascourses}}
                        <span class="badge badge-info">{{#str}}nolinkedcourses, tool_lp{{/str}}</span>
                        {{/hascourses}}
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
                
                $buffer .= $indent . '                <div class="drag-samenode" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="border p-2 mb-2">
';
                // 'canmanagetemplatecompetencies' section
                $value = $context->find('canmanagetemplatecompetencies');
                $buffer .= $this->section7e81ef846937bcc3bb067b09fa2cf95e($context, $indent, $value);
                // 'competency' section
                $value = $context->find('competency');
                $buffer .= $this->sectionF5d7789e354ad3d8e1d16c95869cc10f($context, $indent, $value);
                $buffer .= $indent . '                        <strong>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA09acaa8594cbc572e3991a994f33c9a($context, $indent, $value);
                $buffer .= '</strong>
';
                // 'hascourses' section
                $value = $context->find('hascourses');
                $buffer .= $this->sectionA25311e95efff4e00590c1e80471ce3c($context, $indent, $value);
                // 'hascourses' inverted section
                $value = $context->find('hascourses');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <span class="badge badge-info">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section87db60fdde5590abde9bb54d15b0323c($context, $indent, $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBff79f99a43b8eab5d9b9f1e961f1570(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesintemplate, tool_lp';
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
                
                $buffer .= 'nocompetenciesintemplate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section162358c28b46626a5b0ef954763a36a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managecompetenciesandframeworks, tool_lp';
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
                
                $buffer .= 'managecompetenciesandframeworks, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA62910100eef74f7a753824c0cc9daf3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div>
            <p><a href="{{manageurl}}">{{#str}}managecompetenciesandframeworks, tool_lp{{/str}}</a></p>
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
                
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <p><a href="';
                $value = $this->resolveValue($context->find('manageurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section162358c28b46626a5b0ef954763a36a3($context, $indent, $value);
                $buffer .= '</a></p>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6199a5c0972784b95c3bd5324a16d397(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencies\'], function(mod) {
    (new mod({{template.id}}, \'template\', {{pagecontextid}}));
});
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
                
                $buffer .= $indent . 'require([\'tool_lp/competencies\'], function(mod) {
';
                $buffer .= $indent . '    (new mod(';
                $value = $this->resolveValue($context->findDot('template.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', \'template\', ';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
