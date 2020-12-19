<?php

namespace App\DTO\Converter;

use App\DTO\BaseDTO;
use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

// This class is used to convert Dto from request body
class DTOConverter implements ParamConverterInterface
{
    function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    function apply(Request $request, ParamConverter $configuration)
    {
        $data = $request->getContent();
        $class = $configuration->getClass();
        $dto = $this->serializer->deserialize($data, $class,'json');
        $request->attributes->set($configuration->getName(), $dto);
        return true;
    }

    function supports(ParamConverter $configuration)
    {
        return is_subclass_of($configuration->getClass(), BaseDTO::class);
    }
}