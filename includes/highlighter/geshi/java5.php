<?php
/*************************************************************************************
 * java.php
 * --------
 * Author: Nigel McNie (nigel@geshi.org)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.7.20
 * Date Started: 2004/07/10
 *
 * Java language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/12/28 (1.0.4)
 *   -  Added instanceof keyword
 * 2004/11/27 (1.0.3)
 *   -  Added support for multiple object splitters
 * 2004/08/05 (1.0.2)
 *   -  Added URL support
 *   -  Added keyword "this", as bugs in GeSHi class ironed out
 * 2004/08/05 (1.0.1)
 *   -  Added support for symbols
 *   -  Added extra missed keywords
 * 2004/07/14 (1.0.0)
 *   -  First Release
 *
 * TODO
 * -------------------------
 * *
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
	'LANG_NAME' => 'Java(TM) 2 Platform Standard Edition 5.0',
	'COMMENT_SINGLE' => array(1 => '//'),   /* import statements are not comments! */
	'COMMENT_MULTI' => array('/*' => '*/'),
	'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array("'", '"'),
	'ESCAPE_CHAR' => '\\',
	'KEYWORDS' => array(
		1 => array(
			/* see the authoritative list of all 50 Java keywords at */
			/* http://java.sun.com/docs/books/jls/third_edition/html/lexical.html#229308 */

			/* java keywords, part 1: control flow */
			'case', 'default', 'do', 'else', 'for',
			'goto', 'if', 'switch', 'while'

			/* IMO 'break', 'continue', 'return' and 'throw' */
                        /* should also be added to this group, as they   */
			/* also manage the control flow,                 */
			/* arguably 'try'/'catch'/'finally' as well      */
			),
		2 => array(
			/* java keywords, part 2 */

			'break', 'continue', 'return', 'throw',
			'try', 'catch', 'finally',

			'abstract', 'assert', 'class', 'const', 'enum', 'extends',
			'final', 'implements', 'import', 'instanceof', 'interface',
			'native', 'new', 'package', 'private', 'protected',
			'public', 'static', 'strictfp', 'super', 'synchronized',
			'this', 'throws', 'transient', 'volatile'
			),
		3 => array(
			/* Java keywords, part 3: primitive data types and 'void' */
			'boolean', 'byte', 'char', 'double',
			'float', 'int', 'long', 'short', 'void'
			),
		4 => array(
			/* other reserved words in Java: literals */
			/* should be styled to look similar to numbers and Strings */
			'false', 'null', 'true'
			),
		5 => array (
			'Applet', 'AppletContext', 'AppletStub', 'AudioClip'
			),
		6 => array (
			'AWTError', 'AWTEvent', 'AWTEventMulticaster', 'AWTException', 'AWTKeyStroke', 'AWTPermission', 'ActiveEvent', 'Adjustable', 'AlphaComposite', 'BasicStroke', 'BorderLayout', 'BufferCapabilities', 'BufferCapabilities.FlipContents', 'Button', 'Canvas', 'CardLayout', 'Checkbox', 'CheckboxGroup', 'CheckboxMenuItem', 'Choice', 'Color', 'Component', 'ComponentOrientation', 'Composite', 'CompositeContext', 'Container', 'ContainerOrderFocusTraversalPolicy', 'Cursor', 'DefaultFocusTraversalPolicy', 'DefaultKeyboardFocusManager', 'Dialog', 'Dimension', 'DisplayMode', 'EventQueue', 'FileDialog', 'FlowLayout', 'FocusTraversalPolicy', 'Font', 'FontFormatException', 'FontMetrics', 'Frame', 'GradientPaint', 'Graphics', 'Graphics2D', 'GraphicsConfigTemplate', 'GraphicsConfiguration', 'GraphicsDevice', 'GraphicsEnvironment', 'GridBagConstraints', 'GridBagLayout', 'GridLayout', 'HeadlessException', 'IllegalComponentStateException', 'Image', 'ImageCapabilities', 'Insets', 'ItemSelectable', 'JobAttributes',
			'JobAttributes.DefaultSelectionType', 'JobAttributes.DestinationType', 'JobAttributes.DialogType', 'JobAttributes.MultipleDocumentHandlingType', 'JobAttributes.SidesType', 'KeyEventDispatcher', 'KeyEventPostProcessor', 'KeyboardFocusManager', 'Label', 'LayoutManager', 'LayoutManager2', 'MediaTracker', 'Menu', 'MenuBar', 'MenuComponent', 'MenuContainer', 'MenuItem', 'MenuShortcut', 'MouseInfo', 'PageAttributes', 'PageAttributes.ColorType', 'PageAttributes.MediaType', 'PageAttributes.OrientationRequestedType', 'PageAttributes.OriginType', 'PageAttributes.PrintQualityType', 'Paint', 'PaintContext', 'Panel', 'Point', 'PointerInfo', 'Polygon', 'PopupMenu', 'PrintGraphics', 'PrintJob', 'Rectangle', 'RenderingHints', 'RenderingHints.Key', 'Robot', 'ScrollPane', 'ScrollPaneAdjustable', 'Scrollbar', 'Shape', 'Stroke', 'SystemColor', 'TextArea', 'TextComponent', 'TextField', 'TexturePaint', 'Toolkit', 'Transparency', 'Window'
			),
		7 => array (
			'CMMException', 'ColorSpace', 'ICC_ColorSpace', 'ICC_Profile', 'ICC_ProfileGray', 'ICC_ProfileRGB', 'ProfileDataException'
			),
		8 => array (
			'Clipboard', 'ClipboardOwner', 'DataFlavor', 'FlavorEvent', 'FlavorListener', 'FlavorMap', 'FlavorTable', 'MimeTypeParseException', 'StringSelection', 'SystemFlavorMap', 'Transferable', 'UnsupportedFlavorException'
			),
		9 => array (
			'Autoscroll', 'DnDConstants', 'DragGestureEvent', 'DragGestureListener', 'DragGestureRecognizer', 'DragSource', 'DragSourceAdapter', 'DragSourceContext', 'DragSourceDragEvent', 'DragSourceDropEvent', 'DragSourceEvent', 'DragSourceListener', 'DragSourceMotionListener', 'DropTarget', 'DropTarget.DropTargetAutoScroller', 'DropTargetAdapter', 'DropTargetContext', 'DropTargetDragEvent', 'DropTargetDropEvent', 'DropTargetEvent', 'DropTargetListener', 'InvalidDnDOperationException', 'MouseDragGestureRecognizer'
			),
		10 => array (
			'AWTEventListener', 'AWTEventListenerProxy', 'ActionEvent', 'ActionListener', 'AdjustmentEvent', 'AdjustmentListener', 'ComponentAdapter', 'ComponentEvent', 'ComponentListener', 'ContainerAdapter', 'ContainerEvent', 'ContainerListener', 'FocusAdapter', 'FocusEvent', 'FocusListener', 'HierarchyBoundsAdapter', 'HierarchyBoundsListener', 'HierarchyEvent', 'HierarchyListener', 'InputEvent', 'InputMethodEvent', 'InputMethodListener', 'InvocationEvent', 'ItemEvent', 'ItemListener', 'KeyAdapter', 'KeyEvent', 'KeyListener', 'MouseAdapter', 'MouseListener', 'MouseMotionAdapter', 'MouseMotionListener', 'MouseWheelEvent', 'MouseWheelListener', 'PaintEvent', 'TextEvent', 'TextListener', 'WindowAdapter', 'WindowEvent', 'WindowFocusListener', 'WindowListener', 'WindowStateListener'
			),
		11 => array (
			'FontRenderContext', 'GlyphJustificationInfo', 'GlyphMetrics', 'GlyphVector', 'GraphicAttribute', 'ImageGraphicAttribute', 'LineBreakMeasurer', 'LineMetrics', 'MultipleMaster', 'NumericShaper', 'ShapeGraphicAttribute', 'TextAttribute', 'TextHitInfo', 'TextLayout', 'TextLayout.CaretPolicy', 'TextMeasurer', 'TransformAttribute'
			),
		12 => array (
			'AffineTransform', 'Arc2D', 'Arc2D.Double', 'Arc2D.Float', 'Area', 'CubicCurve2D', 'CubicCurve2D.Double', 'CubicCurve2D.Float', 'Dimension2D', 'Ellipse2D', 'Ellipse2D.Double', 'Ellipse2D.Float', 'FlatteningPathIterator', 'GeneralPath', 'IllegalPathStateException', 'Line2D', 'Line2D.Double', 'Line2D.Float', 'NoninvertibleTransformException', 'PathIterator', 'Point2D', 'Point2D.Double', 'Point2D.Float', 'QuadCurve2D', 'QuadCurve2D.Double', 'QuadCurve2D.Float', 'Rectangle2D', 'Rectangle2D.Double', 'Rectangle2D.Float', 'RectangularShape', 'RoundRectangle2D', 'RoundRectangle2D.Double', 'RoundRectangle2D.Float'
			),
		13 => array (
			'InputContext', 'InputMethodHighlight', 'InputMethodRequests', 'InputSubset'
			),
		14 => array (
			'InputMethod', 'InputMethodContext', 'InputMethodDescriptor'
			),
		15 => array (
			'AffineTransformOp', 'AreaAveragingScaleFilter', 'BandCombineOp', 'BandedSampleModel', 'BufferStrategy', 'BufferedImage', 'BufferedImageFilter', 'BufferedImageOp', 'ByteLookupTable', 'ColorConvertOp', 'ColorModel', 'ComponentColorModel', 'ComponentSampleModel', 'ConvolveOp', 'CropImageFilter', 'DataBuffer', 'DataBufferByte', 'DataBufferDouble', 'DataBufferFloat', 'DataBufferInt', 'DataBufferShort', 'DataBufferUShort', 'DirectColorModel', 'FilteredImageSource', 'ImageConsumer', 'ImageFilter', 'ImageObserver', 'ImageProducer', 'ImagingOpException', 'IndexColorModel', 'Kernel', 'LookupOp', 'LookupTable', 'MemoryImageSource', 'MultiPixelPackedSampleModel', 'PackedColorModel', 'PixelGrabber', 'PixelInterleavedSampleModel', 'RGBImageFilter', 'Raster', 'RasterFormatException', 'RasterOp', 'RenderedImage', 'ReplicateScaleFilter', 'RescaleOp', 'SampleModel', 'ShortLookupTable', 'SinglePixelPackedSampleModel', 'TileObserver', 'VolatileImage', 'WritableRaster', 'WritableRenderedImage'
			),
		16 => array (
			'ContextualRenderedImageFactory', 'ParameterBlock', 'RenderContext', 'RenderableImage', 'RenderableImageOp', 'RenderableImageProducer', 'RenderedImageFactory'
			),
		17 => array (
			'Book', 'PageFormat', 'Pageable', 'Paper', 'Printable', 'PrinterAbortException', 'PrinterException', 'PrinterGraphics', 'PrinterIOException', 'PrinterJob'
			),
		18 => array (
			'AppletInitializer', 'BeanDescriptor', 'BeanInfo', 'Beans', 'Customizer', 'DefaultPersistenceDelegate', 'DesignMode', 'Encoder', 'EventHandler', 'EventSetDescriptor', 'ExceptionListener', 'Expression', 'FeatureDescriptor', 'IndexedPropertyChangeEvent', 'IndexedPropertyDescriptor', 'Introspector', 'MethodDescriptor', 'ParameterDescriptor', 'PersistenceDelegate', 'PropertyChangeEvent', 'PropertyChangeListener', 'PropertyChangeListenerProxy', 'PropertyChangeSupport', 'PropertyDescriptor', 'PropertyEditor', 'PropertyEditorManager', 'PropertyEditorSupport', 'PropertyVetoException', 'SimpleBeanInfo', 'VetoableChangeListener', 'VetoableChangeListenerProxy', 'VetoableChangeSupport', 'Visibility', 'XMLDecoder', 'XMLEncoder'
			),
		19 => array (
			'BeanContext', 'BeanContextChild', 'BeanContextChildComponentProxy', 'BeanContextChildSupport', 'BeanContextContainerProxy', 'BeanContextEvent', 'BeanContextMembershipEvent', 'BeanContextMembershipListener', 'BeanContextProxy', 'BeanContextServiceAvailableEvent', 'BeanContextServiceProvider', 'BeanContextServiceProviderBeanInfo', 'BeanContextServiceRevokedEvent', 'BeanContextServiceRevokedListener', 'BeanContextServices', 'BeanContextServicesListener', 'BeanContextServicesSupport', 'BeanContextServicesSupport.BCSSServiceProvider', 'BeanContextSupport', 'BeanContextSupport.BCSIterator'
			),
		20 => array (
			'BufferedInputStream', 'BufferedOutputStream', 'BufferedReader', 'BufferedWriter', 'ByteArrayInputStream', 'ByteArrayOutputStream', 'CharArrayReader', 'CharArrayWriter', 'CharConversionException', 'Closeable', 'DataInput', 'DataOutput', 'EOFException', 'Externalizable', 'File', 'FileDescriptor', 'FileInputStream', 'FileNotFoundException', 'FileOutputStream', 'FilePermission', 'FileReader', 'FileWriter', 'FilenameFilter', 'FilterInputStream', 'FilterOutputStream', 'FilterReader', 'FilterWriter', 'Flushable', 'IOException', 'InputStreamReader', 'InterruptedIOException', 'InvalidClassException', 'InvalidObjectException', 'LineNumberInputStream', 'LineNumberReader', 'NotActiveException', 'NotSerializableException', 'ObjectInput', 'ObjectInputStream', 'ObjectInputStream.GetField', 'ObjectInputValidation', 'ObjectOutput', 'ObjectOutputStream', 'ObjectOutputStream.PutField', 'ObjectStreamClass', 'ObjectStreamConstants', 'ObjectStreamException', 'ObjectStreamField', 'OptionalDataException', 'OutputStreamWriter',
			'PipedInputStream', 'PipedOutputStream', 'PipedReader', 'PipedWriter', 'PrintStream', 'PrintWriter', 'PushbackInputStream', 'PushbackReader', 'RandomAccessFile', 'Reader', 'SequenceInputStream', 'Serializable', 'SerializablePermission', 'StreamCorruptedException', 'StreamTokenizer', 'StringBufferInputStream', 'StringReader', 'StringWriter', 'SyncFailedException', 'UTFDataFormatException', 'UnsupportedEncodingException', 'WriteAbortedException', 'Writer'
			),
		21 => array (
			'AbstractMethodError', 'Appendable', 'ArithmeticException', 'ArrayIndexOutOfBoundsException', 'ArrayStoreException', 'AssertionError', 'Boolean', 'Byte', 'CharSequence', 'Character', 'Character.Subset', 'Character.UnicodeBlock', 'Class', 'ClassCastException', 'ClassCircularityError', 'ClassFormatError', 'ClassLoader', 'ClassNotFoundException', 'CloneNotSupportedException', 'Cloneable', 'Comparable', 'Compiler', 'Deprecated', 'Double', 'Enum', 'EnumConstantNotPresentException', 'Error', 'Exception', 'ExceptionInInitializerError', 'Float', 'IllegalAccessError', 'IllegalAccessException', 'IllegalArgumentException', 'IllegalMonitorStateException', 'IllegalStateException', 'IllegalThreadStateException', 'IncompatibleClassChangeError', 'IndexOutOfBoundsException', 'InheritableThreadLocal', 'InstantiationError', 'InstantiationException', 'Integer', 'InternalError', 'InterruptedException', 'Iterable', 'LinkageError', 'Long', 'Math', 'NegativeArraySizeException', 'NoClassDefFoundError', 'NoSuchFieldError',
			'NoSuchFieldException', 'NoSuchMethodError', 'NoSuchMethodException', 'NullPointerException', 'Number', 'NumberFormatException', 'OutOfMemoryError', 'Override', 'Package', 'Process', 'ProcessBuilder', 'Readable', 'Runnable', 'Runtime', 'RuntimeException', 'RuntimePermission', 'SecurityException', 'SecurityManager', 'Short', 'StackOverflowError', 'StackTraceElement', 'StrictMath', 'String', 'StringBuffer', 'StringBuilder', 'StringIndexOutOfBoundsException', 'SuppressWarnings', 'System', 'Thread', 'Thread.State', 'Thread.UncaughtExceptionHandler', 'ThreadDeath', 'ThreadGroup', 'ThreadLocal', 'Throwable', 'TypeNotPresentException', 'UnknownError', 'UnsatisfiedLinkError', 'UnsupportedClassVersionError', 'UnsupportedOperationException', 'VerifyError', 'VirtualMachineError', 'Void'
			),
		22 => array (
			'AnnotationFormatError', 'AnnotationTypeMismatchException', 'Documented', 'ElementType', 'IncompleteAnnotationException', 'Inherited', 'Retention', 'RetentionPolicy', 'Target'
			),
		23 => array (
			'ClassDefinition', 'ClassFileTransformer', 'IllegalClassFormatException', 'Instrumentation', 'UnmodifiableClassException'
			),
		24 => array (
			'ClassLoadingMXBean', 'CompilationMXBean', 'GarbageCollectorMXBean', 'ManagementFactory', 'ManagementPermission', 'MemoryMXBean', 'MemoryManagerMXBean', 'MemoryNotificationInfo', 'MemoryPoolMXBean', 'MemoryType', 'MemoryUsage', 'OperatingSystemMXBean', 'RuntimeMXBean', 'ThreadInfo', 'ThreadMXBean'
			),
		25 => array (
			'PhantomReference', 'ReferenceQueue', 'SoftReference', 'WeakReference'
			),
		26 => array (
			'AccessibleObject', 'AnnotatedElement', 'Constructor', 'Field', 'GenericArrayType', 'GenericDeclaration', 'GenericSignatureFormatError', 'InvocationHandler', 'InvocationTargetException', 'MalformedParameterizedTypeException', 'Member', 'Method', 'Modifier', 'ParameterizedType', 'ReflectPermission', 'Type', 'TypeVariable', 'UndeclaredThrowableException', 'WildcardType'
			),
		27 => array (
			'BigDecimal', 'BigInteger', 'MathContext', 'RoundingMode'
			),
		28 => array (
			'Authenticator', 'Authenticator.RequestorType', 'BindException', 'CacheRequest', 'CacheResponse', 'ContentHandlerFactory', 'CookieHandler', 'DatagramPacket', 'DatagramSocket', 'DatagramSocketImpl', 'DatagramSocketImplFactory', 'FileNameMap', 'HttpRetryException', 'HttpURLConnection', 'Inet4Address', 'Inet6Address', 'InetAddress', 'InetSocketAddress', 'JarURLConnection', 'MalformedURLException', 'MulticastSocket', 'NetPermission', 'NetworkInterface', 'NoRouteToHostException', 'PasswordAuthentication', 'PortUnreachableException', 'ProtocolException', 'Proxy.Type', 'ProxySelector', 'ResponseCache', 'SecureCacheResponse', 'ServerSocket', 'Socket', 'SocketAddress', 'SocketException', 'SocketImpl', 'SocketImplFactory', 'SocketOptions', 'SocketPermission', 'SocketTimeoutException', 'URI', 'URISyntaxException', 'URL', 'URLClassLoader', 'URLConnection', 'URLDecoder', 'URLEncoder', 'URLStreamHandler', 'URLStreamHandlerFactory', 'UnknownServiceException'
			),
		29 => array (
			'Buffer', 'BufferOverflowException', 'BufferUnderflowException', 'ByteBuffer', 'ByteOrder', 'CharBuffer', 'DoubleBuffer', 'FloatBuffer', 'IntBuffer', 'InvalidMarkException', 'LongBuffer', 'MappedByteBuffer', 'ReadOnlyBufferException', 'ShortBuffer'
			),
		30 => array (
			'AlreadyConnectedException', 'AsynchronousCloseException', 'ByteChannel', 'CancelledKeyException', 'Channel', 'Channels', 'ClosedByInterruptException', 'ClosedChannelException', 'ClosedSelectorException', 'ConnectionPendingException', 'DatagramChannel', 'FileChannel', 'FileChannel.MapMode', 'FileLock', 'FileLockInterruptionException', 'GatheringByteChannel', 'IllegalBlockingModeException', 'IllegalSelectorException', 'InterruptibleChannel', 'NoConnectionPendingException', 'NonReadableChannelException', 'NonWritableChannelException', 'NotYetBoundException', 'NotYetConnectedException', 'OverlappingFileLockException', 'Pipe', 'Pipe.SinkChannel', 'Pipe.SourceChannel', 'ReadableByteChannel', 'ScatteringByteChannel', 'SelectableChannel', 'SelectionKey', 'Selector', 'ServerSocketChannel', 'SocketChannel', 'UnresolvedAddressException', 'UnsupportedAddressTypeException', 'WritableByteChannel'
			),
		31 => array (
			'AbstractInterruptibleChannel', 'AbstractSelectableChannel', 'AbstractSelectionKey', 'AbstractSelector', 'SelectorProvider'
			),
		32 => array (
			'CharacterCodingException', 'Charset', 'CharsetDecoder', 'CharsetEncoder', 'CoderMalfunctionError', 'CoderResult', 'CodingErrorAction', 'IllegalCharsetNameException', 'MalformedInputException', 'UnmappableCharacterException', 'UnsupportedCharsetException'
			),
		33 => array (
			'CharsetProvider'
			),
		34 => array (
			'AccessException', 'AlreadyBoundException', 'ConnectIOException', 'MarshalException', 'MarshalledObject', 'Naming', 'NoSuchObjectException', 'NotBoundException', 'RMISecurityException', 'RMISecurityManager', 'Remote', 'RemoteException', 'ServerError', 'ServerException', 'ServerRuntimeException', 'StubNotFoundException', 'UnexpectedException', 'UnmarshalException'
			),
		35 => array (
			'Activatable', 'ActivateFailedException', 'ActivationDesc', 'ActivationException', 'ActivationGroup', 'ActivationGroupDesc', 'ActivationGroupDesc.CommandEnvironment', 'ActivationGroupID', 'ActivationGroup_Stub', 'ActivationID', 'ActivationInstantiator', 'ActivationMonitor', 'ActivationSystem', 'Activator', 'UnknownGroupException', 'UnknownObjectException'
			),
		36 => array (
			'DGC', 'Lease', 'VMID'
			),
		37 => array (
			'LocateRegistry', 'Registry', 'RegistryHandler'
			),
		38 => array (
			'ExportException', 'LoaderHandler', 'LogStream', 'ObjID', 'Operation', 'RMIClassLoader', 'RMIClassLoaderSpi', 'RMIClientSocketFactory', 'RMIFailureHandler', 'RMIServerSocketFactory', 'RMISocketFactory', 'RemoteCall', 'RemoteObject', 'RemoteObjectInvocationHandler', 'RemoteRef', 'RemoteServer', 'RemoteStub', 'ServerCloneException', 'ServerNotActiveException', 'ServerRef', 'Skeleton', 'SkeletonMismatchException', 'SkeletonNotFoundException', 'SocketSecurityException', 'UID', 'UnicastRemoteObject', 'Unreferenced'
			),
		39 => array (
			'AccessControlContext', 'AccessControlException', 'AccessController', 'AlgorithmParameterGenerator', 'AlgorithmParameterGeneratorSpi', 'AlgorithmParameters', 'AlgorithmParametersSpi', 'AllPermission', 'AuthProvider', 'BasicPermission', 'CodeSigner', 'CodeSource', 'DigestException', 'DigestInputStream', 'DigestOutputStream', 'DomainCombiner', 'GeneralSecurityException', 'Guard', 'GuardedObject', 'Identity', 'IdentityScope', 'InvalidAlgorithmParameterException', 'InvalidParameterException', 'Key', 'KeyException', 'KeyFactory', 'KeyFactorySpi', 'KeyManagementException', 'KeyPair', 'KeyPairGenerator', 'KeyPairGeneratorSpi', 'KeyRep', 'KeyRep.Type', 'KeyStore', 'KeyStore.Builder', 'KeyStore.CallbackHandlerProtection', 'KeyStore.Entry', 'KeyStore.LoadStoreParameter', 'KeyStore.PasswordProtection', 'KeyStore.PrivateKeyEntry', 'KeyStore.ProtectionParameter', 'KeyStore.SecretKeyEntry', 'KeyStore.TrustedCertificateEntry', 'KeyStoreException', 'KeyStoreSpi', 'MessageDigest', 'MessageDigestSpi',
			'NoSuchAlgorithmException', 'NoSuchProviderException', 'PermissionCollection', 'Permissions', 'PrivateKey', 'PrivilegedAction', 'PrivilegedActionException', 'PrivilegedExceptionAction', 'ProtectionDomain', 'Provider', 'Provider.Service', 'ProviderException', 'PublicKey', 'SecureClassLoader', 'SecureRandom', 'SecureRandomSpi', 'Security', 'SecurityPermission', 'Signature', 'SignatureException', 'SignatureSpi', 'SignedObject', 'Signer', 'UnrecoverableEntryException', 'UnrecoverableKeyException', 'UnresolvedPermission'
			),
		40 => array (
			'Acl', 'AclEntry', 'AclNotFoundException', 'Group', 'LastOwnerException', 'NotOwnerException', 'Owner'
			),
		41 => array (
			'CRL', 'CRLException', 'CRLSelector', 'CertPath', 'CertPath.CertPathRep', 'CertPathBuilder', 'CertPathBuilderException', 'CertPathBuilderResult', 'CertPathBuilderSpi', 'CertPathParameters', 'CertPathValidator', 'CertPathValidatorException', 'CertPathValidatorResult', 'CertPathValidatorSpi', 'CertSelector', 'CertStore', 'CertStoreException', 'CertStoreParameters', 'CertStoreSpi', 'Certificate.CertificateRep', 'CertificateFactory', 'CertificateFactorySpi', 'CollectionCertStoreParameters', 'LDAPCertStoreParameters', 'PKIXBuilderParameters', 'PKIXCertPathBuilderResult', 'PKIXCertPathChecker', 'PKIXCertPathValidatorResult', 'PKIXParameters', 'PolicyNode', 'PolicyQualifierInfo', 'TrustAnchor', 'X509CRL', 'X509CRLEntry', 'X509CRLSelector', 'X509CertSelector', 'X509Extension'
			),
		42 => array (
			'DSAKey', 'DSAKeyPairGenerator', 'DSAParams', 'DSAPrivateKey', 'DSAPublicKey', 'ECKey', 'ECPrivateKey', 'ECPublicKey', 'RSAKey', 'RSAMultiPrimePrivateCrtKey', 'RSAPrivateCrtKey', 'RSAPrivateKey', 'RSAPublicKey'
			),
		43 => array (
			'AlgorithmParameterSpec', 'DSAParameterSpec', 'DSAPrivateKeySpec', 'DSAPublicKeySpec', 'ECField', 'ECFieldF2m', 'ECFieldFp', 'ECGenParameterSpec', 'ECParameterSpec', 'ECPoint', 'ECPrivateKeySpec', 'ECPublicKeySpec', 'EllipticCurve', 'EncodedKeySpec', 'InvalidKeySpecException', 'InvalidParameterSpecException', 'KeySpec', 'MGF1ParameterSpec', 'PKCS8EncodedKeySpec', 'PSSParameterSpec', 'RSAKeyGenParameterSpec', 'RSAMultiPrimePrivateCrtKeySpec', 'RSAOtherPrimeInfo', 'RSAPrivateCrtKeySpec', 'RSAPrivateKeySpec', 'RSAPublicKeySpec', 'X509EncodedKeySpec'
			),
		44 => array (
			'BatchUpdateException', 'Blob', 'CallableStatement', 'Clob', 'Connection', 'DataTruncation', 'DatabaseMetaData', 'Driver', 'DriverManager', 'DriverPropertyInfo', 'ParameterMetaData', 'PreparedStatement', 'Ref', 'ResultSet', 'ResultSetMetaData', 'SQLData', 'SQLException', 'SQLInput', 'SQLOutput', 'SQLPermission', 'SQLWarning', 'Savepoint', 'Struct', 'Time', 'Types'
			),
		45 => array (
			'AttributedCharacterIterator', 'AttributedCharacterIterator.Attribute', 'AttributedString', 'Bidi', 'BreakIterator', 'CharacterIterator', 'ChoiceFormat', 'CollationElementIterator', 'CollationKey', 'Collator', 'DateFormat', 'DateFormat.Field', 'DateFormatSymbols', 'DecimalFormat', 'DecimalFormatSymbols', 'FieldPosition', 'Format', 'Format.Field', 'MessageFormat', 'MessageFormat.Field', 'NumberFormat', 'NumberFormat.Field', 'ParseException', 'ParsePosition', 'RuleBasedCollator', 'SimpleDateFormat', 'StringCharacterIterator'
			),
		46 => array (
			'AbstractCollection', 'AbstractList', 'AbstractMap', 'AbstractQueue', 'AbstractSequentialList', 'AbstractSet', 'ArrayList', 'Arrays', 'BitSet', 'Calendar', 'Collection', 'Collections', 'Comparator', 'ConcurrentModificationException', 'Currency', 'Dictionary', 'DuplicateFormatFlagsException', 'EmptyStackException', 'EnumMap', 'EnumSet', 'Enumeration', 'EventListenerProxy', 'EventObject', 'FormatFlagsConversionMismatchException', 'Formattable', 'FormattableFlags', 'Formatter.BigDecimalLayoutForm', 'FormatterClosedException', 'GregorianCalendar', 'HashMap', 'HashSet', 'Hashtable', 'IdentityHashMap', 'IllegalFormatCodePointException', 'IllegalFormatConversionException', 'IllegalFormatException', 'IllegalFormatFlagsException', 'IllegalFormatPrecisionException', 'IllegalFormatWidthException', 'InputMismatchException', 'InvalidPropertiesFormatException', 'Iterator', 'LinkedHashMap', 'LinkedHashSet', 'LinkedList', 'ListIterator', 'ListResourceBundle', 'Locale', 'Map', 'Map.Entry', 'MissingFormatArgumentException',
			'MissingFormatWidthException', 'MissingResourceException', 'NoSuchElementException', 'Observable', 'Observer', 'PriorityQueue', 'Properties', 'PropertyPermission', 'PropertyResourceBundle', 'Queue', 'Random', 'RandomAccess', 'ResourceBundle', 'Scanner', 'Set', 'SimpleTimeZone', 'SortedMap', 'SortedSet', 'Stack', 'StringTokenizer', 'TimeZone', 'TimerTask', 'TooManyListenersException', 'TreeMap', 'TreeSet', 'UUID', 'UnknownFormatConversionException', 'UnknownFormatFlagsException', 'Vector', 'WeakHashMap'
			),
		47 => array (
			'AbstractExecutorService', 'ArrayBlockingQueue', 'BlockingQueue', 'BrokenBarrierException', 'Callable', 'CancellationException', 'CompletionService', 'ConcurrentHashMap', 'ConcurrentLinkedQueue', 'ConcurrentMap', 'CopyOnWriteArrayList', 'CopyOnWriteArraySet', 'CountDownLatch', 'CyclicBarrier', 'DelayQueue', 'Delayed', 'Exchanger', 'ExecutionException', 'Executor', 'ExecutorCompletionService', 'ExecutorService', 'Executors', 'Future', 'FutureTask', 'LinkedBlockingQueue', 'PriorityBlockingQueue', 'RejectedExecutionException', 'RejectedExecutionHandler', 'ScheduledExecutorService', 'ScheduledFuture', 'ScheduledThreadPoolExecutor', 'Semaphore', 'SynchronousQueue', 'ThreadFactory', 'ThreadPoolExecutor', 'ThreadPoolExecutor.AbortPolicy', 'ThreadPoolExecutor.CallerRunsPolicy', 'ThreadPoolExecutor.DiscardOldestPolicy', 'ThreadPoolExecutor.DiscardPolicy', 'TimeUnit', 'TimeoutException'
			),
		48 => array (
			'AtomicBoolean', 'AtomicInteger', 'AtomicIntegerArray', 'AtomicIntegerFieldUpdater', 'AtomicLong', 'AtomicLongArray', 'AtomicLongFieldUpdater', 'AtomicMarkableReference', 'AtomicReference', 'AtomicReferenceArray', 'AtomicReferenceFieldUpdater', 'AtomicStampedReference'
			),
		49 => array (
			'AbstractQueuedSynchronizer', 'Condition', 'Lock', 'LockSupport', 'ReadWriteLock', 'ReentrantLock', 'ReentrantReadWriteLock', 'ReentrantReadWriteLock.ReadLock', 'ReentrantReadWriteLock.WriteLock'
			),
		50 => array (
			'Attributes.Name', 'JarEntry', 'JarException', 'JarFile', 'JarInputStream', 'JarOutputStream', 'Manifest', 'Pack200', 'Pack200.Packer', 'Pack200.Unpacker'
			),
		51 => array (
			'ConsoleHandler', 'ErrorManager', 'FileHandler', 'Filter', 'Handler', 'Level', 'LogManager', 'LogRecord', 'Logger', 'LoggingMXBean', 'LoggingPermission', 'MemoryHandler', 'SimpleFormatter', 'SocketHandler', 'StreamHandler', 'XMLFormatter'
			),
		52 => array (
			'AbstractPreferences', 'BackingStoreException', 'InvalidPreferencesFormatException', 'NodeChangeEvent', 'NodeChangeListener', 'PreferenceChangeEvent', 'PreferenceChangeListener', 'Preferences', 'PreferencesFactory'
			),
		53 => array (
			'MatchResult', 'Matcher', 'Pattern', 'PatternSyntaxException'
			),
		54 => array (
			'Adler32', 'CRC32', 'CheckedInputStream', 'CheckedOutputStream', 'Checksum', 'DataFormatException', 'Deflater', 'DeflaterOutputStream', 'GZIPInputStream', 'GZIPOutputStream', 'Inflater', 'InflaterInputStream', 'ZipEntry', 'ZipException', 'ZipFile', 'ZipInputStream', 'ZipOutputStream'
			),
		55 => array (
			'Accessible', 'AccessibleAction', 'AccessibleAttributeSequence', 'AccessibleBundle', 'AccessibleComponent', 'AccessibleContext', 'AccessibleEditableText', 'AccessibleExtendedComponent', 'AccessibleExtendedTable', 'AccessibleExtendedText', 'AccessibleHyperlink', 'AccessibleHypertext', 'AccessibleIcon', 'AccessibleKeyBinding', 'AccessibleRelation', 'AccessibleRelationSet', 'AccessibleResourceBundle', 'AccessibleRole', 'AccessibleSelection', 'AccessibleState', 'AccessibleStateSet', 'AccessibleStreamable', 'AccessibleTable', 'AccessibleTableModelChange', 'AccessibleText', 'AccessibleTextSequence', 'AccessibleValue'
			),
		56 => array (
			'ActivityCompletedException', 'ActivityRequiredException', 'InvalidActivityException'
			),
		57 => array (
			'BadPaddingException', 'Cipher', 'CipherInputStream', 'CipherOutputStream', 'CipherSpi', 'EncryptedPrivateKeyInfo', 'ExemptionMechanism', 'ExemptionMechanismException', 'ExemptionMechanismSpi', 'IllegalBlockSizeException', 'KeyAgreement', 'KeyAgreementSpi', 'KeyGenerator', 'KeyGeneratorSpi', 'Mac', 'MacSpi', 'NoSuchPaddingException', 'NullCipher', 'SealedObject', 'SecretKey', 'SecretKeyFactory', 'SecretKeyFactorySpi', 'ShortBufferException'
			),
		58 => array (
			'DHKey', 'DHPrivateKey', 'DHPublicKey', 'PBEKey'
			),
		59 => array (
			'DESKeySpec', 'DESedeKeySpec', 'DHGenParameterSpec', 'DHParameterSpec', 'DHPrivateKeySpec', 'DHPublicKeySpec', 'IvParameterSpec', 'OAEPParameterSpec', 'PBEKeySpec', 'PBEParameterSpec', 'PSource', 'PSource.PSpecified', 'RC2ParameterSpec', 'RC5ParameterSpec', 'SecretKeySpec'
			),
		60 => array (
			'IIOException', 'IIOImage', 'IIOParam', 'IIOParamController', 'ImageIO', 'ImageReadParam', 'ImageReader', 'ImageTranscoder', 'ImageTypeSpecifier', 'ImageWriteParam', 'ImageWriter'
			),
		61 => array (
			'IIOReadProgressListener', 'IIOReadUpdateListener', 'IIOReadWarningListener', 'IIOWriteProgressListener', 'IIOWriteWarningListener'
			),
		62 => array (
			'IIOInvalidTreeException', 'IIOMetadata', 'IIOMetadataController', 'IIOMetadataFormat', 'IIOMetadataFormatImpl', 'IIOMetadataNode'
			),
		63 => array (
			'BMPImageWriteParam'
			),
		64 => array (
			'JPEGHuffmanTable', 'JPEGImageReadParam', 'JPEGImageWriteParam', 'JPEGQTable'
			),
		65 => array (
			'IIORegistry', 'IIOServiceProvider', 'ImageInputStreamSpi', 'ImageOutputStreamSpi', 'ImageReaderSpi', 'ImageReaderWriterSpi', 'ImageTranscoderSpi', 'ImageWriterSpi', 'RegisterableService', 'ServiceRegistry', 'ServiceRegistry.Filter'
			),
		66 => array (
			'FileCacheImageInputStream', 'FileCacheImageOutputStream', 'FileImageInputStream', 'FileImageOutputStream', 'IIOByteBuffer', 'ImageInputStream', 'ImageInputStreamImpl', 'ImageOutputStream', 'ImageOutputStreamImpl', 'MemoryCacheImageInputStream', 'MemoryCacheImageOutputStream'
			),
		67 => array (
			'AttributeChangeNotification', 'AttributeChangeNotificationFilter', 'AttributeNotFoundException', 'AttributeValueExp', 'BadAttributeValueExpException', 'BadBinaryOpValueExpException', 'BadStringOperationException', 'Descriptor', 'DescriptorAccess', 'DynamicMBean', 'InstanceAlreadyExistsException', 'InstanceNotFoundException', 'InvalidApplicationException', 'JMException', 'JMRuntimeException', 'ListenerNotFoundException', 'MBeanAttributeInfo', 'MBeanConstructorInfo', 'MBeanException', 'MBeanFeatureInfo', 'MBeanInfo', 'MBeanNotificationInfo', 'MBeanOperationInfo', 'MBeanParameterInfo', 'MBeanPermission', 'MBeanRegistration', 'MBeanRegistrationException', 'MBeanServer', 'MBeanServerBuilder', 'MBeanServerConnection', 'MBeanServerDelegate', 'MBeanServerDelegateMBean', 'MBeanServerFactory', 'MBeanServerInvocationHandler', 'MBeanServerNotification', 'MBeanServerPermission', 'MBeanTrustPermission', 'MalformedObjectNameException', 'NotCompliantMBeanException', 'Notification', 'NotificationBroadcaster',
			'NotificationBroadcasterSupport', 'NotificationEmitter', 'NotificationFilter', 'NotificationFilterSupport', 'NotificationListener', 'ObjectInstance', 'ObjectName', 'OperationsException', 'PersistentMBean', 'Query', 'QueryEval', 'QueryExp', 'ReflectionException', 'RuntimeErrorException', 'RuntimeMBeanException', 'RuntimeOperationsException', 'ServiceNotFoundException', 'StandardMBean', 'StringValueExp', 'ValueExp'
			),
		68 => array (
			'ClassLoaderRepository', 'MLet', 'MLetMBean', 'PrivateClassLoader', 'PrivateMLet'
			),
		69 => array (
			'DescriptorSupport', 'InvalidTargetObjectTypeException', 'ModelMBean', 'ModelMBeanAttributeInfo', 'ModelMBeanConstructorInfo', 'ModelMBeanInfo', 'ModelMBeanInfoSupport', 'ModelMBeanNotificationBroadcaster', 'ModelMBeanNotificationInfo', 'ModelMBeanOperationInfo', 'RequiredModelMBean', 'XMLParseException'
			),
		70 => array (
			'CounterMonitor', 'CounterMonitorMBean', 'GaugeMonitor', 'GaugeMonitorMBean', 'Monitor', 'MonitorMBean', 'MonitorNotification', 'MonitorSettingException', 'StringMonitor', 'StringMonitorMBean'
			),
		71 => array (
			'ArrayType', 'CompositeData', 'CompositeDataSupport', 'CompositeType', 'InvalidOpenTypeException', 'KeyAlreadyExistsException', 'OpenDataException', 'OpenMBeanAttributeInfo', 'OpenMBeanAttributeInfoSupport', 'OpenMBeanConstructorInfo', 'OpenMBeanConstructorInfoSupport', 'OpenMBeanInfo', 'OpenMBeanInfoSupport', 'OpenMBeanOperationInfo', 'OpenMBeanOperationInfoSupport', 'OpenMBeanParameterInfo', 'OpenMBeanParameterInfoSupport', 'SimpleType', 'TabularData', 'TabularDataSupport', 'TabularType'
			),
		72 => array (
			'InvalidRelationIdException', 'InvalidRelationServiceException', 'InvalidRelationTypeException', 'InvalidRoleInfoException', 'InvalidRoleValueException', 'MBeanServerNotificationFilter', 'Relation', 'RelationException', 'RelationNotFoundException', 'RelationNotification', 'RelationService', 'RelationServiceMBean', 'RelationServiceNotRegisteredException', 'RelationSupport', 'RelationSupportMBean', 'RelationType', 'RelationTypeNotFoundException', 'RelationTypeSupport', 'Role', 'RoleInfo', 'RoleInfoNotFoundException', 'RoleList', 'RoleNotFoundException', 'RoleResult', 'RoleStatus', 'RoleUnresolved', 'RoleUnresolvedList'
			),
		73 => array (
			'JMXAuthenticator', 'JMXConnectionNotification', 'JMXConnector', 'JMXConnectorFactory', 'JMXConnectorProvider', 'JMXConnectorServer', 'JMXConnectorServerFactory', 'JMXConnectorServerMBean', 'JMXConnectorServerProvider', 'JMXPrincipal', 'JMXProviderException', 'JMXServerErrorException', 'JMXServiceURL', 'MBeanServerForwarder', 'NotificationResult', 'SubjectDelegationPermission', 'TargetedNotification'
			),
		74 => array (
			'RMIConnection', 'RMIConnectionImpl', 'RMIConnectionImpl_Stub', 'RMIConnector', 'RMIConnectorServer', 'RMIIIOPServerImpl', 'RMIJRMPServerImpl', 'RMIServer', 'RMIServerImpl', 'RMIServerImpl_Stub'
			),
		75 => array (
			'TimerAlarmClockNotification', 'TimerMBean', 'TimerNotification'
			),
		76 => array (
			'AuthenticationNotSupportedException', 'BinaryRefAddr', 'CannotProceedException', 'CommunicationException', 'CompositeName', 'CompoundName', 'ConfigurationException', 'ContextNotEmptyException', 'InitialContext', 'InsufficientResourcesException', 'InterruptedNamingException', 'InvalidNameException', 'LimitExceededException', 'LinkException', 'LinkLoopException', 'LinkRef', 'MalformedLinkException', 'Name', 'NameAlreadyBoundException', 'NameClassPair', 'NameNotFoundException', 'NameParser', 'NamingEnumeration', 'NamingException', 'NamingSecurityException', 'NoInitialContextException', 'NoPermissionException', 'NotContextException', 'OperationNotSupportedException', 'PartialResultException', 'RefAddr', 'Referenceable', 'ReferralException', 'ServiceUnavailableException', 'SizeLimitExceededException', 'StringRefAddr', 'TimeLimitExceededException'
			),
		77 => array (
			'AttributeInUseException', 'AttributeModificationException', 'BasicAttribute', 'BasicAttributes', 'DirContext', 'InitialDirContext', 'InvalidAttributeIdentifierException', 'InvalidAttributesException', 'InvalidSearchControlsException', 'InvalidSearchFilterException', 'ModificationItem', 'NoSuchAttributeException', 'SchemaViolationException', 'SearchControls', 'SearchResult'
			),
		78 => array (
			'EventContext', 'EventDirContext', 'NamespaceChangeListener', 'NamingEvent', 'NamingExceptionEvent', 'NamingListener', 'ObjectChangeListener'
			),
		79 => array (
			'BasicControl', 'ControlFactory', 'ExtendedRequest', 'ExtendedResponse', 'HasControls', 'InitialLdapContext', 'LdapContext', 'LdapName', 'LdapReferralException', 'ManageReferralControl', 'PagedResultsControl', 'PagedResultsResponseControl', 'Rdn', 'SortControl', 'SortKey', 'SortResponseControl', 'StartTlsRequest', 'StartTlsResponse', 'UnsolicitedNotification', 'UnsolicitedNotificationEvent', 'UnsolicitedNotificationListener'
			),
		80 => array (
			'DirObjectFactory', 'DirStateFactory', 'DirStateFactory.Result', 'DirectoryManager', 'InitialContextFactory', 'InitialContextFactoryBuilder', 'NamingManager', 'ObjectFactory', 'ObjectFactoryBuilder', 'ResolveResult', 'Resolver', 'StateFactory'
			),
		81 => array (
			'ServerSocketFactory', 'SocketFactory'
			),
		82 => array (
			'CertPathTrustManagerParameters', 'HandshakeCompletedEvent', 'HandshakeCompletedListener', 'HostnameVerifier', 'HttpsURLConnection', 'KeyManager', 'KeyManagerFactory', 'KeyManagerFactorySpi', 'KeyStoreBuilderParameters', 'ManagerFactoryParameters', 'SSLContext', 'SSLContextSpi', 'SSLEngine', 'SSLEngineResult', 'SSLEngineResult.HandshakeStatus', 'SSLEngineResult.Status', 'SSLException', 'SSLHandshakeException', 'SSLKeyException', 'SSLPeerUnverifiedException', 'SSLPermission', 'SSLProtocolException', 'SSLServerSocket', 'SSLServerSocketFactory', 'SSLSession', 'SSLSessionBindingEvent', 'SSLSessionBindingListener', 'SSLSessionContext', 'SSLSocket', 'SSLSocketFactory', 'TrustManager', 'TrustManagerFactory', 'TrustManagerFactorySpi', 'X509ExtendedKeyManager', 'X509KeyManager', 'X509TrustManager'
			),
		83 => array (
			'AttributeException', 'CancelablePrintJob', 'Doc', 'DocFlavor', 'DocFlavor.BYTE_ARRAY', 'DocFlavor.CHAR_ARRAY', 'DocFlavor.INPUT_STREAM', 'DocFlavor.READER', 'DocFlavor.SERVICE_FORMATTED', 'DocFlavor.STRING', 'DocFlavor.URL', 'DocPrintJob', 'FlavorException', 'MultiDoc', 'MultiDocPrintJob', 'MultiDocPrintService', 'PrintException', 'PrintService', 'PrintServiceLookup', 'ServiceUI', 'ServiceUIFactory', 'SimpleDoc', 'StreamPrintService', 'StreamPrintServiceFactory', 'URIException'
			),
		84 => array (
			'AttributeSetUtilities', 'DateTimeSyntax', 'DocAttribute', 'DocAttributeSet', 'EnumSyntax', 'HashAttributeSet', 'HashDocAttributeSet', 'HashPrintJobAttributeSet', 'HashPrintRequestAttributeSet', 'HashPrintServiceAttributeSet', 'IntegerSyntax', 'PrintJobAttribute', 'PrintJobAttributeSet', 'PrintRequestAttribute', 'PrintRequestAttributeSet', 'PrintServiceAttribute', 'PrintServiceAttributeSet', 'ResolutionSyntax', 'SetOfIntegerSyntax', 'Size2DSyntax', 'SupportedValuesAttribute', 'TextSyntax', 'URISyntax', 'UnmodifiableSetException'
			),
		85 => array (
			'Chromaticity', 'ColorSupported', 'Compression', 'Copies', 'CopiesSupported', 'DateTimeAtCompleted', 'DateTimeAtCreation', 'DateTimeAtProcessing', 'Destination', 'DocumentName', 'Fidelity', 'Finishings', 'JobHoldUntil', 'JobImpressions', 'JobImpressionsCompleted', 'JobImpressionsSupported', 'JobKOctets', 'JobKOctetsProcessed', 'JobKOctetsSupported', 'JobMediaSheets', 'JobMediaSheetsCompleted', 'JobMediaSheetsSupported', 'JobMessageFromOperator', 'JobName', 'JobOriginatingUserName', 'JobPriority', 'JobPrioritySupported', 'JobSheets', 'JobState', 'JobStateReason', 'JobStateReasons', 'Media', 'MediaName', 'MediaPrintableArea', 'MediaSize', 'MediaSize.Engineering', 'MediaSize.ISO', 'MediaSize.JIS', 'MediaSize.NA', 'MediaSize.Other', 'MediaSizeName', 'MediaTray', 'MultipleDocumentHandling', 'NumberOfDocuments', 'NumberOfInterveningJobs', 'NumberUp', 'NumberUpSupported', 'OrientationRequested', 'OutputDeviceAssigned', 'PDLOverrideSupported', 'PageRanges', 'PagesPerMinute', 'PagesPerMinuteColor',
			'PresentationDirection', 'PrintQuality', 'PrinterInfo', 'PrinterIsAcceptingJobs', 'PrinterLocation', 'PrinterMakeAndModel', 'PrinterMessageFromOperator', 'PrinterMoreInfo', 'PrinterMoreInfoManufacturer', 'PrinterName', 'PrinterResolution', 'PrinterState', 'PrinterStateReason', 'PrinterStateReasons', 'PrinterURI', 'QueuedJobCount', 'ReferenceUriSchemesSupported', 'RequestingUserName', 'Severity', 'SheetCollate', 'Sides'
			),
		86 => array (
			'PrintEvent', 'PrintJobAdapter', 'PrintJobAttributeEvent', 'PrintJobAttributeListener', 'PrintJobEvent', 'PrintJobListener', 'PrintServiceAttributeEvent', 'PrintServiceAttributeListener'
			),
		87 => array (
			'PortableRemoteObject'
			),
		88 => array (
			'ClassDesc', 'PortableRemoteObjectDelegate', 'Stub', 'StubDelegate', 'Tie', 'Util', 'UtilDelegate', 'ValueHandler', 'ValueHandlerMultiFormat'
			),
		89 => array (
			'SslRMIClientSocketFactory', 'SslRMIServerSocketFactory'
			),
		90 => array (
			'AuthPermission', 'DestroyFailedException', 'Destroyable', 'PrivateCredentialPermission', 'RefreshFailedException', 'Refreshable', 'Subject', 'SubjectDomainCombiner'
			),
		91 => array (
			'Callback', 'CallbackHandler', 'ChoiceCallback', 'ConfirmationCallback', 'LanguageCallback', 'NameCallback', 'PasswordCallback', 'TextInputCallback', 'TextOutputCallback', 'UnsupportedCallbackException'
			),
		92 => array (
			'DelegationPermission', 'KerberosKey', 'KerberosPrincipal', 'KerberosTicket', 'ServicePermission'
			),
		93 => array (
			'AccountException', 'AccountExpiredException', 'AccountLockedException', 'AccountNotFoundException', 'AppConfigurationEntry', 'AppConfigurationEntry.LoginModuleControlFlag', 'Configuration', 'CredentialException', 'CredentialExpiredException', 'CredentialNotFoundException', 'FailedLoginException', 'LoginContext', 'LoginException'
			),
		94 => array (
			'LoginModule'
			),
		95 => array (
			'X500Principal', 'X500PrivateCredential'
			),
		96 => array (
			'AuthorizeCallback', 'RealmCallback', 'RealmChoiceCallback', 'Sasl', 'SaslClient', 'SaslClientFactory', 'SaslException', 'SaslServer', 'SaslServerFactory'
			),
		97 => array (
			'ControllerEventListener', 'Instrument', 'InvalidMidiDataException', 'MetaEventListener', 'MetaMessage', 'MidiChannel', 'MidiDevice', 'MidiDevice.Info', 'MidiEvent', 'MidiFileFormat', 'MidiMessage', 'MidiSystem', 'MidiUnavailableException', 'Patch', 'Receiver', 'Sequence', 'Sequencer', 'Sequencer.SyncMode', 'ShortMessage', 'Soundbank', 'SoundbankResource', 'Synthesizer', 'SysexMessage', 'Track', 'Transmitter', 'VoiceStatus'
			),
		98 => array (
			'MidiDeviceProvider', 'MidiFileReader', 'MidiFileWriter', 'SoundbankReader'
			),
		99 => array (
			'AudioFileFormat', 'AudioFileFormat.Type', 'AudioFormat', 'AudioFormat.Encoding', 'AudioInputStream', 'AudioPermission', 'AudioSystem', 'BooleanControl', 'BooleanControl.Type', 'Clip', 'CompoundControl', 'CompoundControl.Type', 'Control.Type', 'DataLine', 'DataLine.Info', 'EnumControl', 'EnumControl.Type', 'FloatControl', 'FloatControl.Type', 'Line', 'Line.Info', 'LineEvent', 'LineEvent.Type', 'LineListener', 'LineUnavailableException', 'Mixer', 'Mixer.Info', 'Port', 'Port.Info', 'ReverbType', 'SourceDataLine', 'TargetDataLine', 'UnsupportedAudioFileException'
			),
		100 => array (
			'AudioFileReader', 'AudioFileWriter', 'FormatConversionProvider', 'MixerProvider'
			),
		101 => array (
			'ConnectionEvent', 'ConnectionEventListener', 'ConnectionPoolDataSource', 'DataSource', 'PooledConnection', 'RowSet', 'RowSetEvent', 'RowSetInternal', 'RowSetListener', 'RowSetMetaData', 'RowSetReader', 'RowSetWriter', 'XAConnection', 'XADataSource'
			),
		102 => array (
			'BaseRowSet', 'CachedRowSet', 'FilteredRowSet', 'JdbcRowSet', 'JoinRowSet', 'Joinable', 'Predicate', 'RowSetMetaDataImpl', 'RowSetWarning', 'WebRowSet'
			),
		103 => array (
			'SQLInputImpl', 'SQLOutputImpl', 'SerialArray', 'SerialBlob', 'SerialClob', 'SerialDatalink', 'SerialException', 'SerialJavaObject', 'SerialRef', 'SerialStruct'
			),
		104 => array (
			'SyncFactory', 'SyncFactoryException', 'SyncProvider', 'SyncProviderException', 'SyncResolver', 'TransactionalWriter', 'XmlReader', 'XmlWriter'
			),
		105 => array (
			'AbstractAction', 'AbstractButton', 'AbstractCellEditor', 'AbstractListModel', 'AbstractSpinnerModel', 'Action', 'ActionMap', 'BorderFactory', 'BoundedRangeModel', 'Box', 'Box.Filler', 'BoxLayout', 'ButtonGroup', 'ButtonModel', 'CellEditor', 'CellRendererPane', 'ComboBoxEditor', 'ComboBoxModel', 'ComponentInputMap', 'DebugGraphics', 'DefaultBoundedRangeModel', 'DefaultButtonModel', 'DefaultCellEditor', 'DefaultComboBoxModel', 'DefaultDesktopManager', 'DefaultFocusManager', 'DefaultListCellRenderer', 'DefaultListCellRenderer.UIResource', 'DefaultListModel', 'DefaultListSelectionModel', 'DefaultSingleSelectionModel', 'DesktopManager', 'FocusManager', 'GrayFilter', 'Icon', 'ImageIcon', 'InputMap', 'InputVerifier', 'InternalFrameFocusTraversalPolicy', 'JApplet', 'JButton', 'JCheckBox', 'JCheckBoxMenuItem', 'JColorChooser', 'JComboBox', 'JComboBox.KeySelectionManager', 'JComponent', 'JDesktopPane', 'JDialog', 'JEditorPane', 'JFileChooser', 'JFormattedTextField', 'JFormattedTextField.AbstractFormatter',
			'JFormattedTextField.AbstractFormatterFactory', 'JFrame', 'JInternalFrame', 'JInternalFrame.JDesktopIcon', 'JLabel', 'JLayeredPane', 'JList', 'JMenu', 'JMenuBar', 'JMenuItem', 'JOptionPane', 'JPanel', 'JPasswordField', 'JPopupMenu', 'JPopupMenu.Separator', 'JProgressBar', 'JRadioButton', 'JRadioButtonMenuItem', 'JRootPane', 'JScrollBar', 'JScrollPane', 'JSeparator', 'JSlider', 'JSpinner', 'JSpinner.DateEditor', 'JSpinner.DefaultEditor', 'JSpinner.ListEditor', 'JSpinner.NumberEditor', 'JSplitPane', 'JTabbedPane', 'JTable', 'JTable.PrintMode', 'JTextArea', 'JTextField', 'JTextPane', 'JToggleButton', 'JToggleButton.ToggleButtonModel', 'JToolBar', 'JToolBar.Separator', 'JToolTip', 'JTree', 'JTree.DynamicUtilTreeNode', 'JTree.EmptySelectionModel', 'JViewport', 'JWindow', 'KeyStroke', 'LayoutFocusTraversalPolicy', 'ListCellRenderer', 'ListModel', 'ListSelectionModel', 'LookAndFeel', 'MenuElement', 'MenuSelectionManager', 'MutableComboBoxModel', 'OverlayLayout', 'Popup', 'PopupFactory', 'ProgressMonitor',
			'ProgressMonitorInputStream', 'Renderer', 'RepaintManager', 'RootPaneContainer', 'ScrollPaneConstants', 'ScrollPaneLayout', 'ScrollPaneLayout.UIResource', 'Scrollable', 'SingleSelectionModel', 'SizeRequirements', 'SizeSequence', 'SortingFocusTraversalPolicy', 'SpinnerDateModel', 'SpinnerListModel', 'SpinnerModel', 'SpinnerNumberModel', 'Spring', 'SpringLayout', 'SpringLayout.Constraints', 'SwingConstants', 'SwingUtilities', 'ToolTipManager', 'TransferHandler', 'UIDefaults', 'UIDefaults.ActiveValue', 'UIDefaults.LazyInputMap', 'UIDefaults.LazyValue', 'UIDefaults.ProxyLazyValue', 'UIManager', 'UIManager.LookAndFeelInfo', 'UnsupportedLookAndFeelException', 'ViewportLayout', 'WindowConstants'
			),
		106 => array (
			'AbstractBorder', 'BevelBorder', 'Border', 'CompoundBorder', 'EmptyBorder', 'EtchedBorder', 'LineBorder', 'MatteBorder', 'SoftBevelBorder', 'TitledBorder'
			),
		107 => array (
			'AbstractColorChooserPanel', 'ColorChooserComponentFactory', 'ColorSelectionModel', 'DefaultColorSelectionModel'
			),
		108 => array (
			'AncestorEvent', 'AncestorListener', 'CaretEvent', 'CaretListener', 'CellEditorListener', 'ChangeEvent', 'ChangeListener', 'DocumentEvent.ElementChange', 'DocumentEvent.EventType', 'DocumentListener', 'EventListenerList', 'HyperlinkEvent', 'HyperlinkEvent.EventType', 'HyperlinkListener', 'InternalFrameAdapter', 'InternalFrameEvent', 'InternalFrameListener', 'ListDataEvent', 'ListDataListener', 'ListSelectionEvent', 'ListSelectionListener', 'MenuDragMouseEvent', 'MenuDragMouseListener', 'MenuEvent', 'MenuKeyEvent', 'MenuKeyListener', 'MenuListener', 'MouseInputAdapter', 'MouseInputListener', 'PopupMenuEvent', 'PopupMenuListener', 'SwingPropertyChangeSupport', 'TableColumnModelEvent', 'TableColumnModelListener', 'TableModelEvent', 'TableModelListener', 'TreeExpansionEvent', 'TreeExpansionListener', 'TreeModelEvent', 'TreeModelListener', 'TreeSelectionEvent', 'TreeSelectionListener', 'TreeWillExpandListener', 'UndoableEditEvent', 'UndoableEditListener'
			),
		109 => array (
			'FileSystemView', 'FileView'
			),
		110 => array (
			'ActionMapUIResource', 'BorderUIResource', 'BorderUIResource.BevelBorderUIResource', 'BorderUIResource.CompoundBorderUIResource', 'BorderUIResource.EmptyBorderUIResource', 'BorderUIResource.EtchedBorderUIResource', 'BorderUIResource.LineBorderUIResource', 'BorderUIResource.MatteBorderUIResource', 'BorderUIResource.TitledBorderUIResource', 'ButtonUI', 'ColorChooserUI', 'ColorUIResource', 'ComboBoxUI', 'ComponentInputMapUIResource', 'ComponentUI', 'DesktopIconUI', 'DesktopPaneUI', 'DimensionUIResource', 'FileChooserUI', 'FontUIResource', 'IconUIResource', 'InputMapUIResource', 'InsetsUIResource', 'InternalFrameUI', 'LabelUI', 'ListUI', 'MenuBarUI', 'MenuItemUI', 'OptionPaneUI', 'PanelUI', 'PopupMenuUI', 'ProgressBarUI', 'RootPaneUI', 'ScrollBarUI', 'ScrollPaneUI', 'SeparatorUI', 'SliderUI', 'SpinnerUI', 'SplitPaneUI', 'TabbedPaneUI', 'TableHeader